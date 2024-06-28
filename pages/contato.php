
<div class="container mt-5 mb-5">

    <h2 class="text-center">Deixe sua mensagem</h2>

    <div class="row justify-content-center">

        <div class="col-md-8">

            <form action="https://formsubmit.co/rodrigo.inglez@gmail.com" method="POST" onsubmit="return validateForm()">
                <div class="form-group mt-1">
                    <label for="name" class="label-name">Nome</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Digite seu nome" required>
                </div>

                <div class="form-group mt-3">
                    <label for="email" class="label-name">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu email" required>
                </div>

                <div class="form-group mt-3">
                    <label for="message" class="label-name">Mensagem</label>
                    <textarea class="form-control" id="message" rows="5" name="message" placeholder="Digite sua mensagem" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary mt-3 mb-2">Enviar</button>

                <input type="hidden" name="_subject" value="Novo Contato">
                <input type="text" name="_honey" style="display:none">
                <input type="hidden" name="_captcha" value="false">
                <input type="hidden" name="_next" value="http://localhost/teste/agradecimento">
            </form>
        </div>
    </div>
</div>

<script>
    function validateForm() {
        // Obter valores dos campos do formulário
        var name = document.getElementById('name').value;
        var email = document.getElementById('email').value;
        var message = document.getElementById('message').value;

        // Verificar se algum campo está vazio
        if (name == "" || email == "" || message == "") {
            alert('Por favor, preencha todos os campos.');
            return false; // Impede o envio do formulário
        }

        // Verificar se o email é válido
        if (!validateEmail(email)) {
            alert('Por favor, insira um endereço de email válido.');
            return false; // Impede o envio do formulário
        }

        return true; // Permite o envio do formulário
    }

    function validateEmail(email) {
        var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }
</script>