<?php
/* Smarty version 4.3.1, created on 2023-11-03 10:24:55
  from 'module:ps_imagesliderviewstemplateshookslider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65451ed7c29aa7_47465476',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c2108a17c7103b6e203f4f0621d4645b56b0114' => 
    array (
      0 => 'module:ps_imagesliderviewstemplateshookslider.tpl',
      1 => 1671916050,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_65451ed7c29aa7_47465476 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <div id="carousel" data-ride="carousel" class="carousel slide" data-interval="5000" data-wrap="true" data-pause="hover" data-touch="true">
    <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
          </ol>
    <ul class="carousel-inner" role="listbox" aria-label="Contenedor carrusel ">
              <li class="carousel-item active" role="option" aria-hidden="false">
                      <figure>
              <img src="http://localhost/ElPinal/modules/ps_imageslider/images/6a452f3034bcb97c07f196f81767c697c512fab8_Abarroteria.png" alt="" loading="lazy" width="1110" height="340">
                          </figure>
                  </li>
              <li class="carousel-item " role="option" aria-hidden="true">
                      <figure>
              <img src="http://localhost/ElPinal/modules/ps_imageslider/images/35fb2308361483fcd9105354493d7fa6440cebcb_Equipo.png" alt="" loading="lazy" width="1110" height="340">
                          </figure>
                  </li>
          </ul>
    <div class="direction" aria-label="Botones del carrusel">
      <a class="left carousel-control" href="#carousel" role="button" data-slide="prev" aria-label="Anterior">
        <span class="icon-prev hidden-xs" aria-hidden="true">
          <i class="material-icons">&#xE5CB;</i>
        </span>
      </a>
      <a class="right carousel-control" href="#carousel" role="button" data-slide="next" aria-label="Siguiente">
        <span class="icon-next" aria-hidden="true">
          <i class="material-icons">&#xE5CC;</i>
        </span>
      </a>
    </div>
  </div>
<?php }
}
