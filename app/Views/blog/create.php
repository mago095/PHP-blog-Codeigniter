<div class="container">
    <h1>Eintrag erstellen</h1>

    <?php if ($_POST): ?>
        <?= \Config\Service::validation()->listErrors();?>
        <?php endif; ?>
    <form class = "" action="/blog/create" method="post">
        <div class = "form-group">
        <label for = "title"><strong>Title:</strong></label>
        <input type = "text" class = "form-control" name = "title" id = "title" value="">

        </div>
        <div class = "form-group">
        <label for = "body"><strong>Body:</strong></label>
        <textarea class ="form-control" name = "body" id="body"></textarea>
        </div>
        <div class = "form-group">
            <button type = "submit" class = "btn btn-primary">Erstellen</button>
        </div>
        



    </form>





</div>