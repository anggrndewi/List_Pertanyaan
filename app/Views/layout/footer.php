
    <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>  
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.datatables.net/v/dt/jq-3.7.0/dt-1.13.6/datatables.min.js"></script>
    <script>
      new DataTable('#myTable', {
        info: true,
        ordering: true,
        paging: true
    });
    </script>  
  </body>
</html>