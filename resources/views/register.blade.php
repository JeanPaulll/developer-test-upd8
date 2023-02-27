<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts/head')
@yield('head')
<body>
@include('layouts/header')
@yield('header')

<section class="bg-half-170 d-table w-100" id="home">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 col-md-12">
                <div class="col mt-4 pt-2" id="forms">
                    <div class="component-wrapper rounded shadow">
                        <div class="p-4 border-bottom">
                            <h4 class="title mb-0"> Cadastro Cliente </h4>
                        </div>

                        <div class="p-4">
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">CPF <span class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-user fea icon-sm icons">
                                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                    <circle cx="12" cy="7" r="4"></circle>
                                                </svg>
                                                <input name="name" id="name" type="text" class="form-control ps-5"
                                                       placeholder="CPF :">
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Nome <span class="text-danger">*</span></label>
                                            <input name="email" id="name" type="text" class="form-control"
                                                   placeholder="Nome :">
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Data Nascimento <span class="text-danger">*</span></label>
                                            <input name="data" id="data" type="date" class="form-control"
                                                   placeholder="Data Nascimento :">
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Endereço <span
                                                    class="text-danger">*</span></label>
                                            <input name="address" id="address" type="text" class="form-control"
                                                   placeholder="Endereço:">
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">state <span class="text-danger">*</span></label>
                                            <select id="inputstate" class="form-control">
                                                <option selected>Escolher...</option>
                                                <option>...</option>
                                            </select>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Cidade <span class="text-danger">*</span></label>
                                            <select id="inputCidade" class="form-control">
                                                <option selected>Escolher...</option>
                                                <option>...</option>
                                            </select>
                                        </div>
                                    </div><!--end col-->

                                </div><!--end row-->
                                <div class="row">
                                    <div class="col-sm-12">
                                        <input type="submit" id="submit" name="salvar" class="btn btn-primary"
                                               value="Salvar">
                                        <input type="submit" id="limpar" name="limpar" class="btn" value="Limpar">
                                    </div><!--end col-->
                                </div><!--end row-->
                            </form><!--end form-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('layouts/table')
@yield('table')
@include('layouts/scripts')
@yield('scripts')
</body>
</html>
