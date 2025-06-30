 <script src="{{ asset('admin/assets/vendor/libs/jquery/jquery.js') }}"></script>
 <script src="{{ asset('admin/assets/vendor/libs/popper/popper.js') }}"></script>
 <script src="{{ asset('admin/assets/vendor/js/bootstrap.js') }}"></script>
 <script src="{{ asset('admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

 <script src="{{ asset('admin/assets/vendor/js/menu.js') }}"></script>
 <!-- endbuild -->

 <!-- Vendors JS -->
 <script src="{{ asset('admin/assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>

 <!-- Main JS -->
 <script src="{{ asset('admin/assets/js/main.js') }}"></script>

 <!-- Page JS -->
 <script src="{{ asset('admin/assets/js/dashboards-analytics.js') }}"></script>

 <!-- Place this tag in your head or just before your close body tag. -->
 <script async defer src="https://buttons.github.io/buttons.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 <style>
     .swal-title-sm {
         font-size: 1rem !important;
         /* حجم أصغر للعناوين */
     }

     .swal-content-sm {
         font-size: 0.85rem !important;
         /* حجم أصغر للنص */
     }

     .swal-confirm-sm {
         font-size: 0.85rem !important;
         /* حجم أصغر لأزرار التأكيد */
     }

     .swal-cancel-sm {
         font-size: 0.85rem !important;
         /* حجم أصغر لأزرار الإلغاء */


     }

     .swal2-popup {
         width: 300px !important;
         /* تصغير عرض النافذة */
         padding: 1.25rem !important;
         /* تقليل الحشوة داخل النافذة */
         font-size: 0.85rem !important;
         /* تصغير حجم الخط بشكل عام */
     }
 </style>
 <script>
     document.addEventListener('livewire:init', () => {
         Livewire.on('close-create-modal', () => {
             const modalEl = document.getElementById('modalCenter');
             const modal = bootstrap.Modal.getOrCreateInstance(modalEl);
             modal.hide();
         });

         Livewire.on('edit-product', () => {
             const modalEl = document.getElementById('editModalCenter');
             const modal = bootstrap.Modal.getOrCreateInstance(modalEl);
             modal.show();
         });

         Livewire.on('close-edit-modal', () => {
             const modalEl = document.getElementById('editModalCenter');
             const modal = bootstrap.Modal.getOrCreateInstance(modalEl);
             modal.hide();
         });

         Livewire.on('show-delete-confirmation', (id) => {
             Swal.fire({
                 title: 'هل أنت متأكد؟',
                 text: "لا يمكنك التراجع بعد الحذف!",
                 icon: 'warning',
                 showCancelButton: true,
                 confirmButtonColor: '#d33',
                 cancelButtonColor: '#3085d6',
                 confirmButtonText: 'نعم، احذف',
                 cancelButtonText: 'إلغاء',
                 customClass: {
                     title: 'swal-title-sm',
                     content: 'swal-content-sm',
                     confirmButton: 'swal-confirm-sm',
                     cancelButton: 'swal-cancel-sm'
                 }
             }).then((result) => {
                 if (result.isConfirmed) {
                     Livewire.dispatch('deleteConfirmed', id);
                 }
             });
         });

         Livewire.on('swal:success', ({
             message
         }) => {
             Swal.fire({
                 icon: 'success',
                 title: 'تم!',
                 text: message,
                 customClass: {
                     title: 'swal-title-sm',
                     content: 'swal-content-sm',
                     confirmButton: 'swal-confirm-sm'
                 }
             });
         });

         Livewire.on('swal:error', ({
             message
         }) => {
             Swal.fire({
                 icon: 'error',
                 title: 'خطأ!',
                 text: message,
                 customClass: {
                     title: 'swal-title-sm',
                     content: 'swal-content-sm',
                     confirmButton: 'swal-confirm-sm'
                 }
             });
         });
     });
 </script>
