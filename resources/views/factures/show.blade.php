@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex">
                <h6>Facture N:  {{$facture->id}}</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr><td>Désignation:</td>
                            <td> {{$facture->designation}}</td>
                        </tr>
                        <tr><td><h5>Prix HT:</h5></td>
                        <td>
                         {{$facture->prix_ht}}
                            </td></tr>
                            <tr><td>TVA:</td><td>
                            {{$facture->TVA}}
                            </td></tr><tr><td><h5>Prix TTC:</h5></td>
                                <td>
                            {{$facture->prix_ttc}}</td>
                            </tr>

                    
                        </table>


                    </div>

                </div>
            </div>
        </div>
    </div>
    @include('layouts.scripts')
</body>
</html>