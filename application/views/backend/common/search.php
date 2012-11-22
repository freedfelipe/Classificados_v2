<form class="search_form" name="search" accept-charset="utf-8" action="/<?=$this->uri->segment(1);?>/<?=$this->uri->segment(2);?>/">
    <div>
        <ul>
            <li>
                Buscar <input type="text" name="seeking" value="<?php echo @$config['search_args']['seeking']; ?>" />
				<input class="button" type="submit" name="search_button" value="Buscar" />
            </li>
            <li>
				<input class="button" type="button" name="search_clean" value="Limpar" />
            </li>
        </ul>
    </div>
</form>