<script src="<?= $asset('comps/raven-js/raven.custom.min.js') ?>"></script>
<script>
  Raven.config('<?= wei()->jsRaven->getDsn() ?>', {
      fetchContext: true
    })
    .install()
    .setUserContext({
      id: '<?= $curUser['id'] ?>'
    });
</script>
