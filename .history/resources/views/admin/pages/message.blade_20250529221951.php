@extends('admin.layouts.app')

@section('title', 'ANASAYFA SÜRDÜRÜLEBİLİRLİK
VE İNSAN ZİRVESİ
2025 | BURSA ')

@section('content')
	<section id="main-content" class="column column-offset-20">
			<h5 class="mt-2">Messajlar</h5><a class="anchor" name="tables"></a>
			<div class="row grid-responsive">
				<div class="column ">
					<div class="card">
						<div class="card-title">
							<h3>Bilgiler</h3>
						</div>
						<div class="card-block">
							<table>
								<thead>
									<tr>
										<th>İsim Soyad</th>
										<th>Mail</th>
										<th>Konu</th>
										<th>Acıklama</th>
                                        <th>İşlemler</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Jane Donovan</td>
										<td>UI Developer</td>
										<td>23</td>
										<td>Philadelphia, PA</td>
                                        <td>Detay</td>
                                          <td>Sil</td>

									</tr>
									<tr>
										<td>Jonathan Smith</td>
										<td>Designer</td>
										<td>30</td>
										<td>London, UK</td>
									</tr>
									<tr>
										<td>Kelly Johnson</td>
										<td>UX Developer</td>
										<td>25</td>
										<td>Los Angeles, CA</td>
									</tr>
									<tr>
										<td>Sam Davidson</td>
										<td>Programmer</td>
										<td>28</td>
										<td>Philadelphia, PA</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>


@endsection
