<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <title>Teste Desenvolvedor PHP - UPD8</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Teste Desenvolvedor PHP" />
    <meta name="keywords" content="Teste, Desenvolvedor, UPD8, PHP, Laravel" />
    <meta name="author" content="UPD8" />
    <meta name="website" content="https://www.upd8.com.br/" />
    <link rel="shortcut icon" href="images/favicon.ico">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/tobii.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
    <link rel="stylesheet" href="assets/css/tiny-slider.css"/>
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" id="theme-opt" />
    <link href="assets/css/colors/default.css" rel="stylesheet" id="color-opt">
</head>
<body>
<header id="topnav" class="defaultscroll sticky">
    <div class="container">
        <a class="logo" href="index.html">
            <img src="assets/images/logo-Upd8.png" class="logo-light-mode" alt="">
            <img src="assets/images/logo-Upd8.png" class="logo-dark-mode" alt="">
        </a>
        <!-- End Logo container-->
        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>


        <div id="navigation">
            <ul class="navigation-menu" style="align-items: flex-start">
                <li><a href="#" class="sub-menu-item">Listagem</a></li>
                <li><a href="#" class="sub-menu-item">Cadastro</a></li>
              </ul>
        </div>
    </div>
</header>
<!-- Navbar End -->

<!-- Hero Start -->
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
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user fea icon-sm icons"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                                <input name="name" id="name" type="text" class="form-control ps-5" placeholder="CPF :">
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Nome <span class="text-danger">*</span></label>
                                            <input name="email" id="name" type="text" class="form-control" placeholder="Nome :">
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Data Nascimento <span class="text-danger">*</span></label>
                                            <input name="data" id="data" type="date" class="form-control" placeholder="Data Nascimento :">
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Endereço <span class="text-danger">*</span></label>
                                            <input name="address" id="address" type="text" class="form-control" placeholder="Endereço:">
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
                                        <input type="submit" id="submit" name="salvar" class="btn btn-primary" value="Salvar">
                                        <input type="submit" id="limpar" name="limpar" class="btn" value="Limpar">
                                    </div><!--end col-->
                                </div><!--end row-->
                            </form><!--end form-->
                        </div>
                    </div>
                </div>
















            </div><!--end col-->

        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- Hero End -->


<!-- counter Start -->
<section class="section bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="section-title me-lg-12">
                    <h4 class="title mb-4">Consulta de cliente</h4>
                    <p class="text-muted">
                        O campo de pesquisa é usado para pesquisar informações específicas, como nomes de clientes ou números de CPF. No entanto, em alguns casos, um único campo de busca pode ser usado para pesquisar várias informações diferentes, como cliente, CPF, data de nascimento, state, cidade e sexo.
                    </p>
                    <hr>
                    <table id="example" class="table table-striped" style="width:100%">
                        <thead>
                        <tr>
                            <th>Cliente</th>
                            <th>CPF</th>
                            <th>Data Nasc.</th>
                            <th>Estado</th>
                            <th>Cidade</th>
                            <th>Sexo</th>
                            <th>Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($clients as $client)
                            <tr>
                                <td>{{ $client->name }}</td>
                                <td>{{ $client->cpf }}</td>
                                <td>{{ $client->birth_date }}</td>
                                <td>{{ $client->state->uf }}</td>
                                <td>{{ $client->city->name }}</td>
                                <td>{{ $client->sex == 'm' ? 'Masculino': 'Feminino'}}</td>
                                <td>
                                    <a href="#"class="btn btn-primary mb-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Editar o item: {{ $client->name }}" alt=""> Editar </a>
                                    <a href="#"class="btn btn-danger mb-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Excluir o item: {{ $client->name }}" alt=""> Excluir </a>
                                </td>
                            </tr>
                        @endforeach


{{--                        <tr>--}}
{{--                            <td>Tiger Nixon</td>--}}
{{--                            <td>System Architect</td>--}}
{{--                            <td>Edinburgh</td>--}}
{{--                            <td>61</td>--}}
{{--                            <td>2011-04-25</td>--}}
{{--                            <td>$320,800</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Garrett Winters</td>--}}
{{--                            <td>Accountant</td>--}}
{{--                            <td>Tokyo</td>--}}
{{--                            <td>63</td>--}}
{{--                            <td>2011-07-25</td>--}}
{{--                            <td>$170,750</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Ashton Cox</td>--}}
{{--                            <td>Junior Technical Author</td>--}}
{{--                            <td>San Francisco</td>--}}
{{--                            <td>66</td>--}}
{{--                            <td>2009-01-12</td>--}}
{{--                            <td>$86,000</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Cedric Kelly</td>--}}
{{--                            <td>Senior Javascript Developer</td>--}}
{{--                            <td>Edinburgh</td>--}}
{{--                            <td>22</td>--}}
{{--                            <td>2012-03-29</td>--}}
{{--                            <td>$433,060</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Airi Satou</td>--}}
{{--                            <td>Accountant</td>--}}
{{--                            <td>Tokyo</td>--}}
{{--                            <td>33</td>--}}
{{--                            <td>2008-11-28</td>--}}
{{--                            <td>$162,700</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Brielle Williamson</td>--}}
{{--                            <td>Integration Specialist</td>--}}
{{--                            <td>New York</td>--}}
{{--                            <td>61</td>--}}
{{--                            <td>2012-12-02</td>--}}
{{--                            <td>$372,000</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Herrod Chandler</td>--}}
{{--                            <td>Sales Assistant</td>--}}
{{--                            <td>San Francisco</td>--}}
{{--                            <td>59</td>--}}
{{--                            <td>2012-08-06</td>--}}
{{--                            <td>$137,500</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Rhona Davidson</td>--}}
{{--                            <td>Integration Specialist</td>--}}
{{--                            <td>Tokyo</td>--}}
{{--                            <td>55</td>--}}
{{--                            <td>2010-10-14</td>--}}
{{--                            <td>$327,900</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Colleen Hurst</td>--}}
{{--                            <td>Javascript Developer</td>--}}
{{--                            <td>San Francisco</td>--}}
{{--                            <td>39</td>--}}
{{--                            <td>2009-09-15</td>--}}
{{--                            <td>$205,500</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Sonya Frost</td>--}}
{{--                            <td>Software Engineer</td>--}}
{{--                            <td>Edinburgh</td>--}}
{{--                            <td>23</td>--}}
{{--                            <td>2008-12-13</td>--}}
{{--                            <td>$103,600</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Jena Gaines</td>--}}
{{--                            <td>Office Manager</td>--}}
{{--                            <td>London</td>--}}
{{--                            <td>30</td>--}}
{{--                            <td>2008-12-19</td>--}}
{{--                            <td>$90,560</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Quinn Flynn</td>--}}
{{--                            <td>Support Lead</td>--}}
{{--                            <td>Edinburgh</td>--}}
{{--                            <td>22</td>--}}
{{--                            <td>2013-03-03</td>--}}
{{--                            <td>$342,000</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Charde Marshall</td>--}}
{{--                            <td>Regional Director</td>--}}
{{--                            <td>San Francisco</td>--}}
{{--                            <td>36</td>--}}
{{--                            <td>2008-10-16</td>--}}
{{--                            <td>$470,600</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Haley Kennedy</td>--}}
{{--                            <td>Senior Marketing Designer</td>--}}
{{--                            <td>London</td>--}}
{{--                            <td>43</td>--}}
{{--                            <td>2012-12-18</td>--}}
{{--                            <td>$313,500</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Tatyana Fitzpatrick</td>--}}
{{--                            <td>Regional Director</td>--}}
{{--                            <td>London</td>--}}
{{--                            <td>19</td>--}}
{{--                            <td>2010-03-17</td>--}}
{{--                            <td>$385,750</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Michael Silva</td>--}}
{{--                            <td>Marketing Designer</td>--}}
{{--                            <td>London</td>--}}
{{--                            <td>66</td>--}}
{{--                            <td>2012-11-27</td>--}}
{{--                            <td>$198,500</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Paul Byrd</td>--}}
{{--                            <td>Chief Financial Officer (CFO)</td>--}}
{{--                            <td>New York</td>--}}
{{--                            <td>64</td>--}}
{{--                            <td>2010-06-09</td>--}}
{{--                            <td>$725,000</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Gloria Little</td>--}}
{{--                            <td>Systems Administrator</td>--}}
{{--                            <td>New York</td>--}}
{{--                            <td>59</td>--}}
{{--                            <td>2009-04-10</td>--}}
{{--                            <td>$237,500</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Bradley Greer</td>--}}
{{--                            <td>Software Engineer</td>--}}
{{--                            <td>London</td>--}}
{{--                            <td>41</td>--}}
{{--                            <td>2012-10-13</td>--}}
{{--                            <td>$132,000</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Dai Rios</td>--}}
{{--                            <td>Personnel Lead</td>--}}
{{--                            <td>Edinburgh</td>--}}
{{--                            <td>35</td>--}}
{{--                            <td>2012-09-26</td>--}}
{{--                            <td>$217,500</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Jenette Caldwell</td>--}}
{{--                            <td>Development Lead</td>--}}
{{--                            <td>New York</td>--}}
{{--                            <td>30</td>--}}
{{--                            <td>2011-09-03</td>--}}
{{--                            <td>$345,000</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Yuri Berry</td>--}}
{{--                            <td>Chief Marketing Officer (CMO)</td>--}}
{{--                            <td>New York</td>--}}
{{--                            <td>40</td>--}}
{{--                            <td>2009-06-25</td>--}}
{{--                            <td>$675,000</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Caesar Vance</td>--}}
{{--                            <td>Pre-Sales Support</td>--}}
{{--                            <td>New York</td>--}}
{{--                            <td>21</td>--}}
{{--                            <td>2011-12-12</td>--}}
{{--                            <td>$106,450</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Doris Wilder</td>--}}
{{--                            <td>Sales Assistant</td>--}}
{{--                            <td>Sydney</td>--}}
{{--                            <td>23</td>--}}
{{--                            <td>2010-09-20</td>--}}
{{--                            <td>$85,600</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Angelica Ramos</td>--}}
{{--                            <td>Chief Executive Officer (CEO)</td>--}}
{{--                            <td>London</td>--}}
{{--                            <td>47</td>--}}
{{--                            <td>2009-10-09</td>--}}
{{--                            <td>$1,200,000</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Gavin Joyce</td>--}}
{{--                            <td>Developer</td>--}}
{{--                            <td>Edinburgh</td>--}}
{{--                            <td>42</td>--}}
{{--                            <td>2010-12-22</td>--}}
{{--                            <td>$92,575</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Jennifer Chang</td>--}}
{{--                            <td>Regional Director</td>--}}
{{--                            <td>Singapore</td>--}}
{{--                            <td>28</td>--}}
{{--                            <td>2010-11-14</td>--}}
{{--                            <td>$357,650</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Brenden Wagner</td>--}}
{{--                            <td>Software Engineer</td>--}}
{{--                            <td>San Francisco</td>--}}
{{--                            <td>28</td>--}}
{{--                            <td>2011-06-07</td>--}}
{{--                            <td>$206,850</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Fiona Green</td>--}}
{{--                            <td>Chief Operating Officer (COO)</td>--}}
{{--                            <td>San Francisco</td>--}}
{{--                            <td>48</td>--}}
{{--                            <td>2010-03-11</td>--}}
{{--                            <td>$850,000</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Shou Itou</td>--}}
{{--                            <td>Regional Marketing</td>--}}
{{--                            <td>Tokyo</td>--}}
{{--                            <td>20</td>--}}
{{--                            <td>2011-08-14</td>--}}
{{--                            <td>$163,000</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Michelle House</td>--}}
{{--                            <td>Integration Specialist</td>--}}
{{--                            <td>Sydney</td>--}}
{{--                            <td>37</td>--}}
{{--                            <td>2011-06-02</td>--}}
{{--                            <td>$95,400</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Suki Burks</td>--}}
{{--                            <td>Developer</td>--}}
{{--                            <td>London</td>--}}
{{--                            <td>53</td>--}}
{{--                            <td>2009-10-22</td>--}}
{{--                            <td>$114,500</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Prescott Bartlett</td>--}}
{{--                            <td>Technical Author</td>--}}
{{--                            <td>London</td>--}}
{{--                            <td>27</td>--}}
{{--                            <td>2011-05-07</td>--}}
{{--                            <td>$145,000</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Gavin Cortez</td>--}}
{{--                            <td>Team Leader</td>--}}
{{--                            <td>San Francisco</td>--}}
{{--                            <td>22</td>--}}
{{--                            <td>2008-10-26</td>--}}
{{--                            <td>$235,500</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Martena Mccray</td>--}}
{{--                            <td>Post-Sales support</td>--}}
{{--                            <td>Edinburgh</td>--}}
{{--                            <td>46</td>--}}
{{--                            <td>2011-03-09</td>--}}
{{--                            <td>$324,050</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Unity Butler</td>--}}
{{--                            <td>Marketing Designer</td>--}}
{{--                            <td>San Francisco</td>--}}
{{--                            <td>47</td>--}}
{{--                            <td>2009-12-09</td>--}}
{{--                            <td>$85,675</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Howard Hatfield</td>--}}
{{--                            <td>Office Manager</td>--}}
{{--                            <td>San Francisco</td>--}}
{{--                            <td>51</td>--}}
{{--                            <td>2008-12-16</td>--}}
{{--                            <td>$164,500</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Hope Fuentes</td>--}}
{{--                            <td>Secretary</td>--}}
{{--                            <td>San Francisco</td>--}}
{{--                            <td>41</td>--}}
{{--                            <td>2010-02-12</td>--}}
{{--                            <td>$109,850</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Vivian Harrell</td>--}}
{{--                            <td>Financial Controller</td>--}}
{{--                            <td>San Francisco</td>--}}
{{--                            <td>62</td>--}}
{{--                            <td>2009-02-14</td>--}}
{{--                            <td>$452,500</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Timothy Mooney</td>--}}
{{--                            <td>Office Manager</td>--}}
{{--                            <td>London</td>--}}
{{--                            <td>37</td>--}}
{{--                            <td>2008-12-11</td>--}}
{{--                            <td>$136,200</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Jackson Bradshaw</td>--}}
{{--                            <td>Director</td>--}}
{{--                            <td>New York</td>--}}
{{--                            <td>65</td>--}}
{{--                            <td>2008-09-26</td>--}}
{{--                            <td>$645,750</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Olivia Liang</td>--}}
{{--                            <td>Support Engineer</td>--}}
{{--                            <td>Singapore</td>--}}
{{--                            <td>64</td>--}}
{{--                            <td>2011-02-03</td>--}}
{{--                            <td>$234,500</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Bruno Nash</td>--}}
{{--                            <td>Software Engineer</td>--}}
{{--                            <td>London</td>--}}
{{--                            <td>38</td>--}}
{{--                            <td>2011-05-03</td>--}}
{{--                            <td>$163,500</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Sakura Yamamoto</td>--}}
{{--                            <td>Support Engineer</td>--}}
{{--                            <td>Tokyo</td>--}}
{{--                            <td>37</td>--}}
{{--                            <td>2009-08-19</td>--}}
{{--                            <td>$139,575</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Thor Walton</td>--}}
{{--                            <td>Developer</td>--}}
{{--                            <td>New York</td>--}}
{{--                            <td>61</td>--}}
{{--                            <td>2013-08-11</td>--}}
{{--                            <td>$98,540</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Finn Camacho</td>--}}
{{--                            <td>Support Engineer</td>--}}
{{--                            <td>San Francisco</td>--}}
{{--                            <td>47</td>--}}
{{--                            <td>2009-07-07</td>--}}
{{--                            <td>$87,500</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Serge Baldwin</td>--}}
{{--                            <td>Data Coordinator</td>--}}
{{--                            <td>Singapore</td>--}}
{{--                            <td>64</td>--}}
{{--                            <td>2012-04-09</td>--}}
{{--                            <td>$138,575</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Zenaida Frank</td>--}}
{{--                            <td>Software Engineer</td>--}}
{{--                            <td>New York</td>--}}
{{--                            <td>63</td>--}}
{{--                            <td>2010-01-04</td>--}}
{{--                            <td>$125,250</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Zorita Serrano</td>--}}
{{--                            <td>Software Engineer</td>--}}
{{--                            <td>San Francisco</td>--}}
{{--                            <td>56</td>--}}
{{--                            <td>2012-06-01</td>--}}
{{--                            <td>$115,000</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Jennifer Acosta</td>--}}
{{--                            <td>Junior Javascript Developer</td>--}}
{{--                            <td>Edinburgh</td>--}}
{{--                            <td>43</td>--}}
{{--                            <td>2013-02-01</td>--}}
{{--                            <td>$75,650</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Cara Stevens</td>--}}
{{--                            <td>Sales Assistant</td>--}}
{{--                            <td>New York</td>--}}
{{--                            <td>46</td>--}}
{{--                            <td>2011-12-06</td>--}}
{{--                            <td>$145,600</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Hermione Butler</td>--}}
{{--                            <td>Regional Director</td>--}}
{{--                            <td>London</td>--}}
{{--                            <td>47</td>--}}
{{--                            <td>2011-03-21</td>--}}
{{--                            <td>$356,250</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Lael Greer</td>--}}
{{--                            <td>Systems Administrator</td>--}}
{{--                            <td>London</td>--}}
{{--                            <td>21</td>--}}
{{--                            <td>2009-02-27</td>--}}
{{--                            <td>$103,500</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Jonas Alexander</td>--}}
{{--                            <td>Developer</td>--}}
{{--                            <td>San Francisco</td>--}}
{{--                            <td>30</td>--}}
{{--                            <td>2010-07-14</td>--}}
{{--                            <td>$86,500</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Shad Decker</td>--}}
{{--                            <td>Regional Director</td>--}}
{{--                            <td>Edinburgh</td>--}}
{{--                            <td>51</td>--}}
{{--                            <td>2008-11-13</td>--}}
{{--                            <td>$183,000</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Michael Bruce</td>--}}
{{--                            <td>Javascript Developer</td>--}}
{{--                            <td>Singapore</td>--}}
{{--                            <td>29</td>--}}
{{--                            <td>2011-06-27</td>--}}
{{--                            <td>$183,000</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Donna Snider</td>--}}
{{--                            <td>Customer Support</td>--}}
{{--                            <td>New York</td>--}}
{{--                            <td>27</td>--}}
{{--                            <td>2011-01-25</td>--}}
{{--                            <td>$112,000</td>--}}
{{--                        </tr>--}}
                        </tbody>
                    </table>




                </div>
            </div><!--end col-->

        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- counter End -->






<!-- Back to top -->
<a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fs-5"><i data-feather="arrow-up" class="fea icon-sm icons align-middle"></i></a>
<!-- Back to top -->

<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/tiny-slider.js "></script>
<script src="assets/js/tobii.min.js "></script>
<script src="assets/js/feather.min.js"></script>
<script src="assets/js/switcher.js"></script>
<script src="assets/js/plugins.init.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script>
<script src="assets/js/app.js"></script>
<script type="application/javascript">
    $(document).ready(function () {
        $('#example').DataTable({
            language: {
                url:"https://cdn.datatables.net/plug-ins/1.11.3/i18n/pt_br.json"
            }
        });
    });

    // $(seletor).DataTable({
    //     data: dados, // array com dados
    //     columns: colunas, // vetor com name das colunas
    //     language: {
    //         url:"https://cdn.datatables.net/plug-ins/1.11.3/i18n/pt_br.json"
    //     }
    // })


</script>
</body>
</html>
