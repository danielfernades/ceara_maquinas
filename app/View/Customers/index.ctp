    <h2>Clientes</h2>
    <p>Nesta tabela estão registradas todos os clientes do Sistema</p>
        
    <div class="noPadding">
        
        <table class="tableList">
            <thead>
                <tr>
                    <th class="txtLeft dataDescending"><a href="#">Nome do cliente</a></th>
                    <th class="dataAscending"><a href="#">E-mail</a></th>
                    <th><a href="#">Telefone</a></th>
                    <th><a href="#">Estado</a></th>
                    <th colspan="2">Ações</th>
                </tr>
            </thead>
        
            <tbody>
                <tr class="success">
                    <td class="txtLeft span3">Fulano de Tal</td>           
                    <td class="txtLeft span4">lucas.codemax@gmail.com</td>
                    <td>(21) 2222-3333</td>
                    <td>Rio de Janeiro</td>
                    <td><a href="#" class="ico ico-tabela" data-toggle="modal"></a></td>
                    <td> <a href="#" class="ico-trash"></a></td>
                </tr>
                <tr class="success">
                    <td class="txtLeft span3">Fulano de Tal</td>           
                    <td class="txtLeft span4">lucas.codemax@gmail.com</td>
                    <td>(21) 2222-3333</td>
                    <td>Rio de Janeiro</td>
                    <td><a href="#" class="ico ico-tabela" data-toggle="modal"></a></td>
                    <td> <a href="#" class="ico-trash"></a></td>
                </tr>
                
        
            </tbody>
        </table>
        
        <div class="navView">
            <div class="pagination">
                <ul>
                    <li class="prev"><span class="previous_page disabled">Anterior</span></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li class="disabled"><a href="#">…</a></li>
                    <li class="next"><a href="#">Próximo</a></li>
                </ul>
            </div>

            <div class="filterCount">
                <div class="control-group">
                    <label class="select optional" for="per-page-top">Exibir </label>
                    <select class="select optional transaction-search-per-page customSelect" id="per-page-top" name="per_page" data-placeholder=" " style="display: none;">
                        <option value=""></option>
                        <option value="10">10</option>
                        <option value="20">20</option>
                        <option value="30">30</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                    <label>ítens por página</label>
                </div>
            </div>
        </div>
    </div>