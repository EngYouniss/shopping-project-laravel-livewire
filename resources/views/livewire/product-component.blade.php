<div>
    @livewireStyles
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
 <style>
    .form-container {
      max-width: 600px;
      margin: 40px auto;
      padding: 30px;
      background-color: #ffffff;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    .image-preview {
      width: 100%;
      height: auto;
      max-height: 250px;
      object-fit: contain;
      margin-top: 10px;
      border: 1px solid #ddd;
      border-radius: 6px;
    }
  </style>
</head>
<body class="bg-light">

  <div class="container">
    <div class="form-container">
      <h2 class="mb-4 text-center">إضافة منتج جديد</h2>
      <form wire:submit.prevent="addProduct">
        <div class="mb-3">
          <label for="productName" class="form-label">اسم المنتج</label>
          <input type="text" class="form-control" id="productName" placeholder="ادخل اسم المنتج" wire:model="prod_name" />
        </div>

        <div class="mb-3">
          <label for="productPrice" class="form-label">السعر</label>
          <input type="number" class="form-control" id="productPrice" placeholder="ادخل السعر" wire:model="prod_price" />
        </div>

        <div class="mb-3">
          <label for="productDescription" class="form-label">الوصف</label>
          <textarea class="form-control" id="productDescription" rows="3" placeholder="ادخل وصف المنتج" wire:model="prod_desc"></textarea>
        </div>

        <div class="mb-3">
          <label for="productImage" class="form-label">صورة المنتج</label>
          <input class="form-control" type="file" id="productImage" wire:model="prod_image" />
<div style="width: 200px;">
    <div wire:loading wire:target="prod_image">uploading...</div>
            @if ($prod_image)
          <img src="{{$prod_image->temporaryUrl()}}" id="imagePreview" class="image-preview " alt="معاينة الصورة" />

            @endif
          </div>
        </div>

        <button type="submit" class="btn btn-primary w-100">إضافة المنتج</button>

      </form>
    </div>
  </div>

  @livewireScripts

</div>
