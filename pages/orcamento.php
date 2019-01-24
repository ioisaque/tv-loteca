<div class="row">
    <div class="container">
        <form name="sentMessage" class="contactForm lonly_form" action="" method="post">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" id="name" name="nome" class="form-control" placeholder="Nome" required="required">
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group">
                        <input type="phone" id="telefone" name="telefone" class="form-control" placeholder="Telefone" required="required">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" id="empresa" name="empresa" class="form-control" placeholder="Empresa" required="required">
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group">
                        <input type="email" id="email" name="email" class="form-control" placeholder="Email" required="required">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
            </div>
                <div class="form-group">
                    <textarea id="message" name="mensagem" class="form-control" rows="4" placeholder="Mensagem" required></textarea>
                    <p class="help-block text-danger"></p>
                </div>
                <div id="success"></div>
                <button type="submit" class="btn btn-custom btn-sm">Solicitar Orçamento</button>
        </form>
    </div>
</div>