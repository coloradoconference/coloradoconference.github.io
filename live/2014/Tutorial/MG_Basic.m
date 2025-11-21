function MG_Basic(n)

% Solve the 2D Poisson problem,
% L(u) = - Laplacian (u) = f, with Dirichlet boundary conditions,
% on a square grid with V(nu1,nu2) cycles. 
% Plot residual norm histories and convergence factor per cycle.
% The input n is the number of grid intervals in each direction. It
% should be a power of 2.

% Important Note: The solution u is of size (n+1) by (n+1). For convenience, 
% the right-hand side and L(u,h) are also set to this size, though only
% their interior values are defined. Their boundary values *must* be 0.  

n = 2^floor(log2(n))              % Reduce n to a power of 2.
h = 1/n;                          % Mesh-size (the domain is the unit square).
nu1 = 1;                          % # Pre-relaxation sweeps.
nu2 = 1;                          % # Post-relaxation sweeps.
n_cycles = 30;                    % Number of cycles
u = zeros(n+1);                   % The initial guess for the solution in 
                                  % this example is zero and the boundary
                                  % conditions are zero.
f = zeros(n+1);                   
f(2:end-1,2:end-1) = rand(n-1);   % The right-hand side is random in this 
                                  % example. f is chosen to be the same 
                                  % size as u for convenience: the boundary
                                  % values of f must remain 0.
r = f - L(u,h);                   % The initial residual.
rnorm = norm(r(:))/n;             % This will store the properly normalized
                                  % residual norm after each cycle. 

for iters = 1:n_cycles,
    u = V_cycle(u,f,h,nu1,nu2);
    r = f - L(u,h);
    rnorm = [rnorm, norm(r(:))/n];
end % for

% Plot residual norm histories on a Log(y) scale.
figure(1)
semilogy([0:n_cycles],rnorm,'k-');
title('Residual Norm History')
xlabel('Iterations')
ylabel('Residual Norm')

% Plot residual norm convergence factors.
figure(2)
plot([1:n_cycles],rnorm(2:end) ./ rnorm(1:end-1),'k-');
title('Residual Convergence Factor Per Cycle')
xlabel('Iterations')
ylabel('Convergence Factor')
return


function Lu = L(u,h) % Computes L(u)

Lu = zeros(size(u)); % Lu is the same size as u for convenience. Only the
                     % interior values are defined.
Lu(2:end-1,2:end-1) = -(u(1:end-2,2:end-1) + u(3:end,2:end-1) + ...
    u(2:end-1,1:end-2) + u(2:end-1,3:end) - 4*u(2:end-1,2:end-1))/h^2;
return;


function u = V_cycle(u,f,h,nu1,nu2);    % Performs a V cycle; recursive.

if (mod(length(u),2) == 0)              % Verify even number of intervals.
    disp('Make n a power of 2');
    return;
end % if

u = RB(u,f,h,nu1);                      % Perform nu1 relaxation sweeps

if (length(u) <= 3)                     % Coarsest grid
    u = Jacobi(u,f,h,1);                % One undamped Jacobi solves exactly, 
                                        % because there is only one variable.
    return;
end % if

r = f - L(u,h);
% r = zeros(size(r));

% Compute residual
fc = Restrict(r);                       % Right-hand side of coarser grid
uc = zeros(size(fc));                   % Zero initial guess on coarse grid
uc = V_cycle(uc,fc,2*h,nu1,nu2);        % Recursive call
u = u + Prolong(uc);                    % Interpolate and add correction

u = RB(u,f,h,nu2);                      % Perform nu2 relaxation sweeps

return

function u = RB(u,f,h,nu)               % Red-Black Gauss-Seidel relaxation 

mask = zeros(size(u,1), size(u,2));     % Create a Red-Black mask
mask(1:2:end,1:2:end) = 1;
mask(2:2:end,2:2:end) = 1;

for iterations = 1:nu
    u = u .* (1-mask) + mask .* Jacobi(u,f,h,1);
    u = u .* mask + (1-mask) .* Jacobi(u,f,h,1);
end % iterations
return

function u = Jacobi(u,f,h,w)            % Jacobi relaxation with damping w

u = u + w*(f - L(u, h))*h^2/4;          % Assumes f = L(u) on boundaries 
return

function fc = Restrict(r);              % Restriction to coarser grid using 
                                        % full-weighted local averaging

fc = r(1:2:end,1:2:end);
fc(2:end-1,2:end-1) = 0.25*(fc(2:end-1,2:end-1) + ...
    0.5*(r(2:2:end-3,3:2:end-2) + r(4:2:end-1,3:2:end-2) + ...
    r(3:2:end-2,2:2:end-3) + r(3:2:end-2,4:2:end-1)) + ...
    0.25*(r(2:2:end-3,2:2:end-3) + r(2:2:end-3,4:2:end-1) + ...
    r(4:2:end-1,2:2:end-3) + r(4:2:end-1,4:2:end-1)));
return

function u = Prolong(uc)                % Bi-linear interpolation

u = zeros(length(uc)*2-1);
u(1:2:end,1:2:end) = uc;
u(2:2:end-1, 1:2:end) = 0.5*(u(1:2:end-2,1:2:end) + u(3:2:end,1:2:end));
u(1:end,2:2:end-1) = 0.5*(u(1:end,1:2:end-2) + u(1:end,3:2:end));
return