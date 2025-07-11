<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Us</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
  <h2 class="mb-4">Contact Us</h2>
  <form enctype="multipart/form-data" method="POST" action="{{route('site1.update')}}">
    @csrf
    <input name="id" type="hidden" value = "{{$contact->id}}">
    <div class="mb-3">
      <label for="name" class="form-label">Name *</label>
      <input name="name" type="text" value = "{{$contact->name}}"class="form-control" id="name" required>
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">Email *</label>
      <input name="email" type="email"value = "{{$contact->email}}" class="form-control" id="email" required>
    </div>

    <div class="mb-3">
      <label for="phone" class="form-label">Phone</label>
      <input name="phone" type="tel"value = "{{$contact->phone}}" class="form-control" id="phone">
    </div>

    <div class="mb-3">
      <label for="message" class="form-label">Message *</label>
      <textarea name="msg" class="form-control" id="message" rows="4" required>{{$contact->msg}}</textarea>
    </div>

    <div class="mb-3">
      <label for="imageUpload" class="form-label">Upload Image</label>
      <input  name="image" class="form-control" type="file" id="imageUpload" accept="image/*">
    </div>
 <div class="mb-3">
    <label class="form-label"> Image Preview </label>
      <img id="imagePreview" src="{{asset('uploads/'.$contact->image)}}" alt="Image Preview" width="150px" />      
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<!-- Bootstrap JS (optional for interactivity) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Image Preview Script -->


</body>
</html>
