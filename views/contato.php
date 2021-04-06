
<h2>Contato</h2>
<hr>
<form>
    <div>
        <label for="nome" class="rotulo">Nome completo:</label>
        <input type="text" name="nome" id="nome" size="50" maxlength="50" required autocomplete="off" autofocus>
    </div>

    <div>
        <label for="email" class="rotulo">E-mail:</label>
        <input type="email" name="enderecoEmail" id="email" placeholder="nome@dominio">
    </div>

    <div>
        <label for="fone" class="rotulo">Telefone:</label>
        <input type="tel" name="telefone" id="fone" 
        placeholder="(xx)xxxxx-xxxx">
    </div>

    <div>
        <label for="assunto"  class="rotulo">Assunto:</label>
        <select name="assunto" id="assunto">
            <option value="0">Selecione</option>
            <option value="1">Dúvidas</option>
            <option value="2">Sugestões</option>
            <option value="3">Críticas</option>
            <option value="4">Elogios</option>
        </select>
    </div>


    <div>
        <label for="msg">Mensagem:</label><br>
        <textarea name="mensagem" id="msg"></textarea>
    </div>

    <div>
        <input type="submit" name="enviar" value="Enviar">
        <input type="reset" name="limpar" value="Limpar campos">
    </div>

    <h2>Nossa localização</h2>
    <details>
        <summary>Ver endereço completo</summary>
        <p>Rua XYZ, nº 1000. Chapecó / SC</p>
    </details>

    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14204.18257333222!2d-52.722257830224606!3d-27.123372299999986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1566247784124!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

</form>
