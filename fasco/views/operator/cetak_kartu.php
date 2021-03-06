

            <!-- BREADCRUMB-->
            <section class="au-breadcrumb m-t-75">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left">                                        
                                        <ul class="list-unstyled list-inline au-breadcrumb__list">
                                            <li class="list-inline-item active">
                                                <a href="<?php echo base_url(); ?>index.php/operator">Dashboard</a>
                                            </li>											
                                            <li class="list-inline-item seprate">
                                                <span>/</span>
                                            </li>
                                            <li class="list-inline-item">Pilih Kelas</li>                                            
                                        </ul>										
                                    </div>
									<button class="au-btn au-btn-icon au-btn--green">
                                    <?php echo $title; ?></button>
								</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>				

						<!-- END BREADCRUMB-->
						<div class="container-fluid">
						<div class="row">
                            <div class="col-md-12">
                                <h3 class="title-5 m-b-35">Data Kelas</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        
                                    </div>
                                    <div class="table-data__tool-right">
                                        <a href="<?php echo base_url(); ?>index.php/operator/tambah_kelas">
											<button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            <i class="zmdi zmdi-plus"></i>tambah kelas</button>
										</a>
                                        <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                            <select class="js-select2" name="type">
                                                <option selected="selected">Export</option>
                                                <option value="">Excel</option>
                                                <option value="">PDF</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table id="tables" class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>No.</th>                                                
                                                <th>Kelas</th>                                                
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
											<?php											
											$i = 1; 
											foreach ($kelas as $s){ 											
											?>
												<tr class="tr-shadow">
													<td><?php echo $i++; ?></td>													
													<td><?php echo $s->nama_kelas; ?></td>													
													<td>
														<div class="table-data-feature">
															
															<button class="item" data-toggle="tooltip" data-placement="top" title="Print">
																<a href="<?php echo base_url(); ?>index.php/operator/cetak_kartu_kelas/<?php echo $s->nama_kelas; ?>"> <i class="zmdi zmdi-print"></i></a>
															</button>
																
														</div>
													</td>
												</tr>												
											<?php } ; ?>			
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
					