@section('table')
    <section class="section bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="section-title me-lg-12">
                        <h4 class="title mb-4">Consulta de cliente</h4>
                        <p class="text-muted">
                            O campo de pesquisa é usado para pesquisar informações específicas, como nomes de clientes
                            ou números de CPF. No entanto, em alguns casos, um único campo de busca pode ser usado para
                            pesquisar várias informações diferentes, como cliente, CPF, data de nascimento, state,
                            cidade e sexo.
                        </p>
                        <hr>
                        <table id="client" class="table table-striped">
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
                                        <a href="#" class="btn btn-primary mb-2" data-bs-toggle="tooltip"
                                           data-bs-placement="top" title="Editar o item: {{ $client->name }}" alt="">
                                            Editar </a>
                                        <a href="#" class="btn btn-danger mb-2" data-bs-toggle="tooltip"
                                           data-bs-placement="top" title="Excluir o item: {{ $client->name }}" alt="">
                                            Excluir </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
