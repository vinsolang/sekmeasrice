// Preview image 
document.addEventListener("DOMContentLoaded", function () {
    function previewImage(input, previewImg, placeholder) {
        if (!input || !previewImg || !placeholder) return; // Prevent error

        input.addEventListener("change", function () {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    previewImg.src = e.target.result;
                    previewImg.classList.remove("hidden");
                    placeholder.classList.add("hidden");
                };
                reader.readAsDataURL(file);
            } else {
                previewImg.classList.add("hidden");
                placeholder.classList.remove("hidden");
            }
        });
    }

    previewImage(
        document.getElementById("thumbnailFile"),
        document.getElementById("thumbnailPreview"),
        document.getElementById("thumbnailPlaceholder")
    );
});
// Preview image for update product local for sales
document.getElementById('thumbnailFile').addEventListener('change', function (event) {
    const file = event.target.files[0];
    const preview = document.getElementById('thumbnailPreview');
    const placeholder = document.getElementById('thumbnailPlaceholder');

    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            preview.src = e.target.result;
            placeholder.classList.add('hidden');
        }
        reader.readAsDataURL(file);
    } else {
        // If no new file, show old image
        preview.src = "{{ asset('assets/products/thumbnail/' . $row->image_local) }}";
        placeholder.classList.add('hidden');
    }
});

// Add Comment of Customer
function submitComment() {
    const textInput = document.querySelector('[x-model="text"]');
    const comment = textInput.value.trim();
    if (!comment) return;

    fetch("{{ route('comments.submit') }}", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": "{{ csrf_token() }}",
            "Accept": "application/json"
        },
        body: JSON.stringify({ comment: comment })
    })
        .then(res => res.json())
        .then(data => {
            // Append new comment at the top
            const container = document.getElementById('commentsContainer');
            const newComment = `
                <div class="flex items-center p-5 transition mx-auto w-full max-w-[600px] gap-5 comment-item">
                    <div class="bg-gray-300 flex-shrink-0 rounded-full">
                        <img src="${data.profile}" alt="Profile" class="w-[60px] h-[60px] rounded-full object-cover">
                    </div>
                    <div class="ml-4 text-left">
                        <span class="font-semibold text-gray-800 block">${data.username}</span>
                        <p class="text-gray-600 text-sm leading-relaxed mt-1">${data.comment}</p>
                    </div>
                </div>`;
            container.insertAdjacentHTML('afterbegin', newComment);
            textInput.value = ""; // Clear input
        })
        .catch(err => console.error(err));
}
