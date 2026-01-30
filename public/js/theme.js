$(document).ready(function () {

  //Category Select 2
  $('.size-color').select2();

  //Append Value for remove post
  $('.remove-post-key').click(function () {
    var postId = $(this).attr('data-value');
    $('.remove-val').val(postId);
  })

});
// Button click to remove
$(document).ready(function () {
  $('.remove-post-key').click(function () {
    var postId = $(this).data('id'); // <-- correct
    $('#remove_id').val(postId); // set into hidden input
  });
});
// click show more 
// $(document).on("click", ".toggle-text", function () {
//     let td = $(this).closest("td");
//     td.find(".short-text, .full-text").toggleClass("d-none");
//     $(this).text($(this).text() === "Read more" ? "Show less" : "Read more");
// });
document.addEventListener("DOMContentLoaded", function () {
  document.querySelectorAll(".toggle-text").forEach(function (btn) {
    btn.addEventListener("click", function () {
      let td = this.closest("td");
      td.querySelector(".short-text").classList.toggle("d-none");
      td.querySelector(".full-text").classList.toggle("d-none");
      this.textContent = this.textContent === "Read more" ? "Read less" : "Read more";
    });
  });
});
// Show preview image when uplaod image
const inputFile1 = document.getElementById("profileFile");
const previewImage1 = document.getElementById("previewImage");
const uploadPlaceholder1 = document.getElementById("uploadPlaceholder");

inputFile1.addEventListener("change", function () {
  const file = this.files[0];
  if (file) {
    const reader = new FileReader();
    reader.onload = function (e) {
      previewImage1.src = e.target.result;
      previewImage1.classList.remove("hidden");
      uploadPlaceholder.classList.add("hidden");
    };
    reader.readAsDataURL(file);
  }
});
/// Preview Update
document.addEventListener('DOMContentLoaded', function () {
  document.querySelectorAll('.uploader').forEach(uploader => {
    const inputFile = uploader.querySelector("input[type='file']");
    const previewImage = uploader.querySelector(".preview-image");
    const placeholder = uploader.querySelector(".upload-placeholder");
    const resetBtn = uploader.querySelector(".reset-btn");

    // store old src (for update case)
    if (previewImage && previewImage.src) {
      previewImage.dataset.old = previewImage.src || '';
      // if there was an old image shown server-side, ensure placeholder hidden
      if (previewImage.dataset.old && !previewImage.classList.contains('hidden')) {
        if (placeholder) placeholder.classList.add('hidden');
        if (resetBtn) resetBtn.classList.remove('hidden');
      }
    }

    if (!inputFile) return; // safety

    inputFile.addEventListener('change', function () {
      const file = this.files && this.files[0];
      if (!file) return;

      const reader = new FileReader();
      reader.onload = function (e) {
        if (previewImage) {
          previewImage.src = e.target.result;
          previewImage.classList.remove('hidden');
        }
        if (placeholder) placeholder.classList.add('hidden');
        if (resetBtn) resetBtn.classList.remove('hidden');
      };
      reader.readAsDataURL(file);
    });

    if (resetBtn) {
      resetBtn.addEventListener('click', function (ev) {
        ev.preventDefault();
        // Clear file selection
        if (inputFile) inputFile.value = '';

        const oldSrc = previewImage ? previewImage.dataset.old || '' : '';

        if (oldSrc) {
          // restore old image (update form)
          previewImage.src = oldSrc;
          previewImage.classList.remove('hidden');
          if (placeholder) placeholder.classList.add('hidden');
          // keep reset visible (user may still want to clear)
        } else {
          // no old image => clear preview and show placeholder
          if (previewImage) {
            previewImage.src = '';
            previewImage.classList.add('hidden');
          }
          if (placeholder) placeholder.classList.remove('hidden');
          resetBtn.classList.add('hidden');
        }
      });
    }
  });
});

// Ck Editor

// {{-- CK Editor --}}
ClassicEditor.create(document.querySelector('#content_kh'), {
  toolbar: [
    'undo', 'redo', '|',
    'heading', '|',
    'bold', 'italic', 'underline', 'strikethrough', '|',
    'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', '|',
    'alignment', '|',
    'bulletedList', 'numberedList', 'blockQuote', '|',
    'link', 'insertTable', 'imageUpload'
  ],
  fontSize: {
    options: ['tiny', 'small', 'default', 'big', 'huge']
  },
  fontFamily: {
    options: [
      'default',
      'Arial, Helvetica, sans-serif',
      'Courier New, Courier, monospace',
      'Georgia, serif',
      'Lucida Sans Unicode, Lucida Grande, sans-serif',
      'Tahoma, Geneva, sans-serif',
      'Times New Roman, Times, serif',
      'Trebuchet MS, Helvetica, sans-serif',
      'Verdana, Geneva, sans-serif'
    ]
  }
}).catch(console.error);
