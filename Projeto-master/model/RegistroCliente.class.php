<?php
    require_once("controller\insereCliente.php");

    class RegistroCliente
     {
        function show() {
            echo 
            '<form role="form" method="POST">
                <div>
                    <label for="inputName" class="col-sm-2 col-form-label">Nome</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" placeholder="Gerson Alvares Cabral" required>
                    </div>
                </div>

                <div>
                    <label for="inputUser" class="col-sm-2 col-form-label">Usuário</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="user" placeholder="gersin2011" required>
                    </div>
                </div>

                <div>
                    <label for="inputPassword" class="col-sm-2 col-form-label">Senha</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="password" placeholder="eusoulindo123" required>
                    </div>
                </div>

                <div>
                    <label for="inputDate" class="col-sm-2 col-form-label">Data de Nascimento</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name="date" required>
                    </div>
                </div>

                <div>
                    <label for="inputAdress" class="col-sm-2 col-form-label">Endereço</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="adress" placeholder="Rua Euclides Pinto 123" required>
                    </div>
                </div>

                <div>
                    <label for="inputAdress" class="col-sm-2 col-form-label">Sexo</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="gender" required>
                            <option value="" disabled selected>Selecione</option>
                            <option value="1">Masculino</option>
                            <option value="2">Feminino</option>
                            <option value="0">Prefiro Não Informar</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label for="inputCPF" class="col-sm-2 col-form-label">CPF</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="cpf" id="cpf" placeholder="000.000.000-00" required>
                    </div>
                </div>

                <div>
                    <label for="inputRG" class="col-sm-2 col-form-label">RG</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="rg" id="rg" placeholder="00000000-0" required>
                    </div>
                </div>

                <div>
                    <label for="inputTelefone" class="col-sm-2 col-form-label">Telefone</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="telefone" id="telefone" placeholder="(43) 3333-3333" required>
                    </div>
                </div>

                <div>
                    <label for="inputCelular" class="col-sm-2 col-form-label">Celular</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="celular" id="celular" placeholder="(43) 99999-9999" required>
                    </div>
                </div>

                <div>
                    <div class="col-sm-10" style="display: flex; justify-content: center; margin-top: 15px;">
                        <input type="submit" value="Registrar-se" name="submit" class="btn btn-primary"/>
                    </div>
                </div>
            </form>';
        }
    }
?>

<script>
    $(document).ready(function(){
        $('#rg').mask('00000000-0');
        $('#cpf').mask('000.000.000-00');
        $('#telefone').mask('(00) 0000-0000');
        $('#celular').mask('(00) 00000-0000');
    })
</script>