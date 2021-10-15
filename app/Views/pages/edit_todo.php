<!DOCTYPE html>
<html>
<?= $this->include('templates/header') ?> 
<body>
  <div class="container">
    <form method="post" name="update_todo" id="update_todo" action="<?= site_url('/update-todo') ?>">
      
      <input type="hidden" name="id" id="id" value="<?php echo $todo_obj['id']; ?>">

      <div class="mb-3">
        <input type="text" name="title" class="form-control" value="<?php echo $todo_obj['title']; ?>">
      </div>

      <div class="mb-3">
        <input type="text" name="description" class="form-control" value="<?php echo $todo_obj['description']; ?>">
      </div>

      <div class="d-grid">
        <button type="submit" class="btn btn-dark">Update</button>
      </div>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
  <script>
    if ($("#update_todo").length > 0) {
      $("#update_todo").validate({
        rules: {
          title: {
            required: true,
          },
          description: {
            required: true,
            maxlength: 120,
          },
        }
      })
    }
  </script>
</body>

</html>