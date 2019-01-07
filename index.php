<?php get_header(); ?>

    <main>
        <div class="container">
            <p>К сожалению, такой страницы не существует. Она была удалена или перемещена.</p>
            <p>Вы будете перенаправлены на главную страницу через несколько секунд.</p>
        </div>
    </main>

<?php get_footer(); ?>
<script>
    setTimeout(function () {
        window.location.href = "http://elmtr.ru";
    }, 5000);
</script>
