<!DOCTYPE html>
<html>
<?= $this->include('templates/header') ?> 
<body>
  <div class="container mt-3">
    <div class="col-md-5 col-lg-4">
    <form method="post" id="add_todo" name="add_todo" 
    action="<?= site_url('/add-todo') ?>">



   
      
      <div class="mb-3">
      <div class="form-floating mb-3">
  <input type="text" name="title" class="form-control" id="title" placeholder="Title">
  <label for="title">Title</label>
</div>
        <!-- <input type="text" name="title" class="form-control" placeholder="Title"> -->
      </div>

      <div class="mb-3">
      <div class="form-floating">
      <textarea class="form-control" name="description" id="description" placeholder="Description" style="min-height: 150px; "></textarea>
  <!-- <input type="password" name="description" class="form-control" id="description" placeholder="Description"> -->
  <label for="description">Description</label>
</div>
        <!-- <input type="text" name="description" class="form-control" placeholder="Description"> -->
      </div>

      <div class="d-grid">
        <button type="submit" class="btn btn-dark">Create</button>
      </div>
    </form>
</div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
  <script>
    if ($("#add_todo").length > 0) {
      $("#add_todo").validate({
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