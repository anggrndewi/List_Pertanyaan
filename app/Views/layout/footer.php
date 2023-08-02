<script src="<?= base_url('js/extention/choices.js') ?>"></script>
    <script src="<?= base_url('js/extention/flatpickr.js') ?>"></script>
    <script>
      flatpickr(".datepicker",
      {});

    </script>
    <script>
      const choices = new Choices('[data-trigger]',
      {
        searchEnabled: false,
        itemSelectText: '',
      });

    </script>
  </body>
</html>