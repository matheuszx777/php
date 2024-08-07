<?php
    require_once("controller\insere.php");

    class RegistroProduto
     {
        function show() {
            echo 
            '<form role="form" method="POST">
                <div>
                    <label for="inputAdress" class="col-sm-2 col-form-label">Categoria</label>
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
                    <label for="inputAdress" class="col-sm-2 col-form-label">Marca</label>
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
                    <label for="inputName" class="col-sm-2 col-form-label">Nome</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" placeholder="Coca-Cola" required>
                    </div>
                </div>

                <div>
                    <label for="inputDescription" class="col-sm-2 col-form-label">Descrição</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="description" placeholder="Refrigerante" required>
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