<div class="filtro">
    <div id="title">Filtros</div>
    <div id="opcoes">
        <form name="filtros">
        <div id="texto">Marca</div>
        <div id="campo">
            <select name="brand_id" id="brand_id" >
                <option value="0">Todas</option>
                <? data_select($brand, @$_POST['brand_id']);?>
            </select>
        </div>
        
        <div id="texto">Modelo</div>
        <div id="campo">
            <select name="model_id" id="model_id" >
                <option value="-1">Selecione uma Marca</option>
            </select>
        </div>
        
        <div id="texto">Categoria</div>
        <div id="campo">
            <select name="category_id" id="category_id" >
                <option value="0">All</option>
                <? data_select($category, @$_POST['category_id']);?>
            </select>
        </div>
        
        <div id="texto">Faixa de Preço</div>
        <div id="campo">
            <select name="faixa-preco" id="faixa-preco" >
                <option value="1">item 1</option>
                <option value="2">item 2</option>
                <option value="3">item 3</option>
                <option value="4">item 4</option>
                <option value="0">All</option>
            </select>
            
            <select name="faixa-preco1" id="faixa-preco1" >
                <option value="1">item 1</option>
                <option value="2">item 2</option>
                <option value="3">item 3</option>
                <option value="4">item 4</option>
                <option value="0">All</option>
            </select>
        </div>
        
        <div id="texto">Estado</div>
        <div id="campo">
            <select name="state_id" id="state_id" >
                <? data_select($state, @$_POST['state_id']);?>
            </select>
        </div>
        
        <div id="texto">Cidade</div>
        <div id="campo">
            <select name="city_id" id="city_id" >
                <option value="-1">Selecione um estado</option>
            </select>
        </div>
        
    </div>
    <form>
        <input type="reset" name="limpar" id="bt-limpar" value="Limpar">
        <input type="submit" name="filtrar" id="bt-filtrar" value="Filtrar">
    </form>
</div>