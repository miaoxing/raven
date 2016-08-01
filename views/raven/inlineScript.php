<script src="<?= $asset([
  'comps/raven-js/dist/raven.js',
  'comps/raven-js/plugins/native.js',
  'comps/raven-js/plugins/jquery.js',
  'comps/raven-js/plugins/require.js',
]) ?>"></script>
<script>
  Raven.config('<?= wei()->jsRaven->getDsn() ?>', {
      fetchContext: true
    })
    .install()
    .setUserContext({
      id: '<?= $curUser['id'] ?>'
    });
</script>
