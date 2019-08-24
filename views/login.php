<div class="login">
    <form method="POST">
        <?php if (isset($erro) && !empty($erro)): ?>
            <div class="erro"><?php echo $erro; ?></div>
        <?php endif; ?> 
        Email:<br/>
        <input type="text" autofocus=""class="login" name="email"><br/>
        Senha:<br/>
        <input type="password"class="login" name="senha"><br/><br/>
        <input type="submit" class="login" name="Entrar"><br/>
    </form>
</div>