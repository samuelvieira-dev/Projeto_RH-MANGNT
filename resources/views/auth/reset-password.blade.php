<x-layout-guest page-title='Redefinir a senha'>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-12">

                <!-- Logo -->
                <div class="text-center mb-4">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" class="img-fluid" style="max-width: 200px;">
                </div>

                <!-- Redefinir Senha -->
                <div class="card shadow-sm border-0 rounded-lg">
                    <div class="card-body p-4">
                        <h4 class="text-center mb-4">Redefinir a Senha</h4>

                        <form action="{{ route('password.update') }}" method="POST">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">

                            <!-- Email -->
                            <div class="form-group mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input 
                                    type="email" 
                                    class="form-control @error('email') is-invalid @enderror" 
                                    id="email" 
                                    name="email" 
                                    placeholder="Digite seu email"
                                    value="{{ old('email') }}"
                                    required>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Senha -->
                            <div class="form-group mb-3">
                                <label for="password" class="form-label">Senha</label>
                                <input 
                                    type="password" 
                                    class="form-control @error('password') is-invalid @enderror" 
                                    id="password" 
                                    name="password" 
                                    placeholder="Digite sua nova senha" 
                                    required>
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Confirmar Senha -->
                            <div class="form-group mb-3">
                                <label for="password_confirmation" class="form-label">Confirmar Senha</label>
                                <input 
                                    type="password" 
                                    class="form-control @error('password_confirmation') is-invalid @enderror" 
                                    id="password_confirmation" 
                                    name="password_confirmation" 
                                    placeholder="Confirme sua nova senha" 
                                    required>
                                @error('password_confirmation')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Ações -->
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="{{ route('login') }}" class="text-decoration-none">
                                    Já sei a minha senha?
                                </a>
                                <button type="submit" class="btn btn-primary px-4">
                                    Redefinir
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-layout-guest>
