<?php include "view/header.php"?>

            <div class="jumbotron jumbotron">
            <div class="container">
                <h1 class="display-4">Carrinho de Compras</h1>
                <p class="lead"></p>
            </div>
            </div>

            <div class="container">
                <div class="row">
                    <aside class="col-lg-9">
                        <div class="card">
                            <div class="table-responsive">
                                <table class="table table-borderless table-shopping-cart">
                                    <thead class="text-muted">
                                        <tr class="small text-uppercase">
                                            <th scope="col">Produto</th>
                                            <th scope="col" width="120">Quantidade</th>
                                            <th scope="col" width="120">Preço</th>
                                            <th scope="col" class="text-right d-none d-md-block" width="200"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <div class="row">
                                       <?php
                        @$carrinho = $_SESSION['carrinho'];

                        if($carrinho === null || empty($carrinho->getItems())){
                            // Inicio HTML
                            ?><tr>
                                  <td><p>Seu Carrinho está vazio</p></td>
                                  </tr>
                            <?php
                            // Fim HTML
                        }else{

                            foreach ($carrinho->getItems() as $item){
                                
                                $produto = $item->getProduto();
                                
                                
                                $link = "http://localhost/loja-petcustoms/carrinho/remover/".$produto->getId();
                            
                                // Inicio HTML
                            ?>
                            <tr>
                                <td>
                                    <figure class="itemside">
                                        <div class="aside"><img width="100" src="<?php echo $url; ?>/View/Img/produtos/<?php echo $produto->getImagem(); ?>" class="img-sm"></div>
                                        <figcaption class="info">
                                            <a href="#" class="title text-dark"><?php echo $item->getProduto()->getNome(); ?></a>
                                            <p class="text-muted small"><?php echo $item->getProduto()->getDescricao(); ?></p>
                                        </figcaption>
                                    </figure>
                                    </td>
                                    <td> 
                                    <select class="form-control">
                                        <option>1</option>
                                        <option>2</option>	
                                        <option>3</option>	
                                        <option>4</option>	
                                    </select> 
                                    </td>
                                    <td> 
                                    <div class="price-wrap"> 
                                        <var class="price">R$ <?php echo $item->getProduto()->getPreco(); ?></var> 
                                    </div> <!-- price-wrap .// -->
                                    </td>
                                    <td class="text-right"> 
                                    <a data-original-title="Save to Wishlist" title="" href="#" class="btn btn-light" data-toggle="tooltip"> <i class="fa fa-heart"></i></a> 
                                    <a href="<?php echo $url; ?>/carrinho/remover/<?php echo $item->getProduto()->getId(); ?>" class="btn btn-light">Remover</a>
                                    
                                    </td>
                                    </tr>
                    <?php   
                    // Fim HTML
                            }
                        }
                    ?>
                                       </div>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </aside>
                    
                    <aside class="col-lg-3">
                        <div class="card mb-3 coupon-box">
                            <div class="card-body">
                                <form>
                                    <div class="form-group"> <label>Tem Cupom?</label>
                                        <div class="input-group"> <input type="text" class="form-control coupon" name="" placeholder="Digite o Codigo do cupom"> <span class="input-group-append"> <button class="btn btn-warning text-dark btn-apply coupon">Aplicar</button> </span> </div>
                                    </div>
                                </form>
                            </div>
                            
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <dl class="dlist-align">
                                    <dt>Preço:</dt>
                                    <dd class="text-right ml-3">R$69.97</dd>
                                </dl>
                                <dl class="dlist-align">
                                    <dt>Desconto:</dt>
                                    <dd class="text-right text-danger ml-3">- R$10.00</dd>
                                </dl>
                                <dl class="dlist-align">
                                    <dt>Total:</dt>
                                    <dd class="text-right text-dark b ml-3"><strong>R$59.97</strong></dd>
                                </dl>
                                <hr> <a href="#" class="btn btn-out btn-warning btn-square btn-main text-dark" data-abc="true"> Finalizar Compra </a> <a href="#" class="btn btn-out btn-success btn-square btn-main mt-2" data-abc="true">Continuar Comprando</a>
                            </div>
                            
                        </div>                       
                    </aside>
                </div>
                <div class="alert alert-warning mt-3">
                    <p class="icontext"><i class="icon text-warning fa fa-truck"></i> Entrega gratis para compras acima de R$ 150,00</p>
                    </div>
            </div>


            </section>
                    <!-- ========================= SECTION CONTENT END// ========================= -->

                    <!-- ========================= SECTION  ========================= -->
                    <section class="section-name bg">
                    <div class="container jumbotron">
                    <h4>Pagamento e Devolução</h4>
                    <p >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                    </div><!-- container // -->
                    </section>
                    </div>
                    <!-- ========================= SECTION  END// ========================= -->

            

<?php include "view/footer.php"?>

