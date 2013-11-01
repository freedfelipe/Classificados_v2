<!-- Mian navigation start -->
<div id="mainnav" class="hidden-phone">

    <!-- User pic start -->
    <div class="user-profile-pic">
        <img src="img/avatar-1.png" alt="Admin">
    </div>
    <!-- User pic end -->
    
    <ul>
        <li <? if($this->uri->segment(2) == 'painel'){ ?>class="active"<? } ?>>
            <? if($this->uri->segment(2) == 'painel'){ ?><span class="current-arrow">&nbsp;</span><? } ?>
            <a href="<?=site_url('admin/painel');?>">
                <div class="icon">
                    <span class="fs1" aria-hidden="true" data-icon="&#xe0a2;"></span>
                </div>
                Painel
            </a>
        </li>
        <li <? if($this->uri->segment(2) == 'parametros'){ ?>class="active"<? } ?>>
            <? if($this->uri->segment(2) == 'parametros'){ ?><span class="current-arrow">&nbsp;</span><? } ?>
            <a href="<?=site_url('admin/parametros');?>">
                <div class="icon">
                    <span class="fs1" aria-hidden="true" data-icon="&#xe14a;"></span>
                </div>
                Parametros do Sistema
            </a>
        </li>
        <li <? if($this->uri->segment(2) == 'planos'){ ?>class="active"<? } ?>>
            <? if($this->uri->segment(2) == 'planos'){ ?><span class="current-arrow">&nbsp;</span><? } ?>
            <a href="<?=site_url('admin/planos');?>">
                <div class="icon">
                    <span class="fs1" aria-hidden="true" data-icon="&#xe14a;"></span>
                </div>
                Planos
            </a>
        </li>
        <li <? if($this->uri->segment(2) == 'usuarios'){ ?>class="active"<? } ?>>
            <? if($this->uri->segment(2) == 'usuarios'){ ?><span class="current-arrow">&nbsp;</span><? } ?>
            <a href="<?=site_url('admin/usuarios');?>">
                <div class="icon">
                    <span class="fs1" aria-hidden="true" data-icon="&#xe14a;"></span>
                </div>
                Usuários
            </a>
        </li>
        <li <? if($this->uri->segment(2) == 'grupos'){ ?>class="active"<? } ?>>
            <? if($this->uri->segment(2) == 'grupos'){ ?><span class="current-arrow">&nbsp;</span><? } ?>
            <a href="<?=site_url('admin/grupos');?>">
                <div class="icon">
                    <span class="fs1" aria-hidden="true" data-icon="&#xe14a;"></span>
                </div>
                Grupos
            </a>
        </li>
        <li <? if($this->uri->segment(2) == 'planos'){ ?>class="active"<? } ?>>
            <? if($this->uri->segment(2) == 'planos'){ ?><span class="current-arrow">&nbsp;</span><? } ?>
            <a href="<?=site_url('admin/planos');?>">
                <div class="icon">
                    <span class="fs1" aria-hidden="true" data-icon="&#xe14a;"></span>
                </div>
                Planos
            </a>
        </li>
        <li <? if($this->uri->segment(2) == 'categorias'){ ?>class="active"<? } ?>>
            <? if($this->uri->segment(2) == 'categorias'){ ?><span class="current-arrow">&nbsp;</span><? } ?>
            <a href="<?=site_url('admin/categorias');?>">
                <div class="icon">
                    <span class="fs1" aria-hidden="true" data-icon="&#xe14a;"></span>
                </div>
                Categorias
            </a>
        </li>
        <li <? if($this->uri->segment(2) == 'marcas'){ ?>class="active"<? } ?>>
            <? if($this->uri->segment(2) == 'marcas'){ ?><span class="current-arrow">&nbsp;</span><? } ?>
            <a href="<?=site_url('admin/marcas');?>">
                <div class="icon">
                    <span class="fs1" aria-hidden="true" data-icon="&#xe14a;"></span>
                </div>
                Marcas
            </a>
        </li>
        <li <? if($this->uri->segment(2) == 'modelos'){ ?>class="active"<? } ?>>
            <? if($this->uri->segment(2) == 'modelos'){ ?><span class="current-arrow">&nbsp;</span><? } ?>
            <a href="<?=site_url('admin/modelos');?>">
                <div class="icon">
                    <span class="fs1" aria-hidden="true" data-icon="&#xe14a;"></span>
                </div>
                Modelos
            </a>
        </li>
        <li <? if($this->uri->segment(2) == 'anuncios'){ ?>class="active"<? } ?>>
            <? if($this->uri->segment(2) == 'anuncios'){ ?><span class="current-arrow">&nbsp;</span><? } ?>
            <a href="<?=site_url('admin/anuncios');?>">
                <div class="icon">
                    <span class="fs1" aria-hidden="true" data-icon="&#xe14a;"></span>
                </div>
                Anuncios
            </a>
        </li>
        <li <? if($this->uri->segment(2) == 'publicidade-categorias' or $this->uri->segment(2) == 'publicidade'){ ?>class="active"<? } ?>>
            <? if($this->uri->segment(2) == 'publicidade-categorias' or $this->uri->segment(2) == 'publicidade'){ ?><span class="current-arrow">&nbsp;</span><? } ?>
            <a href="javascript:">
                <div class="icon">
                    <span class="fs1" aria-hidden="true" data-icon="&#xe14a;"></span>
                </div>
                Publicidade
            </a>
            <ul>
                <li>
                    <a href="<?=site_url('admin/publicidade-categorias');?>">Categorias de Publicidade</a>
                </li>
                <li>
                    <a href="<?=site_url('admin/publicidade');?>">Publicidade</a>
                </li>
            </ul>
        </li>
        <li <? if($this->uri->segment(2) == 'parceiros'){ ?>class="active"<? } ?>>
            <? if($this->uri->segment(2) == 'parceiros'){ ?><span class="current-arrow">&nbsp;</span><? } ?>
            <a href="<?=site_url('admin/parceiros');?>">
                <div class="icon">
                    <span class="fs1" aria-hidden="true" data-icon="&#xe14a;"></span>
                </div>
                Parceiros
            </a>
        </li>
        <li <? if($this->uri->segment(2) == 'opcionais'){ ?>class="active"<? } ?>>
            <? if($this->uri->segment(2) == 'opcionais'){ ?><span class="current-arrow">&nbsp;</span><? } ?>
            <a href="<?=site_url('admin/opcionais');?>">
                <div class="icon">
                    <span class="fs1" aria-hidden="true" data-icon="&#xe14a;"></span>
                </div>
                Opcionais
            </a>
        </li>
        <li <? if($this->uri->segment(2) == 'anunciantes'){ ?>class="active"<? } ?>>
            <? if($this->uri->segment(2) == 'anunciantes'){ ?><span class="current-arrow">&nbsp;</span><? } ?>
            <a href="<?=site_url('admin/anunciantes');?>">
                <div class="icon">
                    <span class="fs1" aria-hidden="true" data-icon="&#xe14a;"></span>
                </div>
                Anunciantes
            </a>
        </li>
        <li>
            <a href="<?=site_url('admin/sair');?>">
                <div class="icon">
                    <span class="fs1" aria-hidden="true" data-icon="&#xe088;"></span>
                </div>
                Sair
            </a>
        </li>
    </ul>
</div>
<!-- Mian navigation end -->