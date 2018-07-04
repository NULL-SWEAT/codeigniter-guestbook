<div class="row">
    <?php foreach ($entries as $entry): ?>
        <div class="col s12 m6">
            <div class="card grey darken-3 hoverable">
                <div class="card-content white-text">
                    <span class="card-title"><p> <?php echo $entry['author']; ?> </p></span>
                    <blockquote> <?php echo $entry['text']; ?> </blockquote>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
