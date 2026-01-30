function commentApp() {
    return {
        text: '',

        submitComment() {
            if (!this.text.trim()) {
                alert('Please write something before submitting.');
                return;
            }

            fetch("{{ route('comments.submit') }}", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": "{{ csrf_token() }}",
                    "Accept": "application/json"
                },
                body: JSON.stringify({ comment: this.text })
            })
                .then(res => {
                    if (!res.ok) throw new Error("Network response was not ok");
                    return res.json();
                })
                .then(data => {
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
                    this.text = ''; // clear input
                })
                .catch(err => {
                    console.error(err);
                    alert(' Something went wrong while submitting your comment.');
                });
        },
        alertLogin() {
            Swal.fire({
                title: 'Login Required',
                text: 'You must log in to comment on this post.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#2563EB', // Tailwind blue-600
                cancelButtonColor: '#6B7280',  // Tailwind gray-500
                confirmButtonText: 'Go to Login',
                cancelButtonText: 'Cancel',
                background: '#fff',
                color: '#1F2937', // text-gray-800
                backdrop: `
            rgba(0,0,0,0.4)
            left top
            no-repeat
        `,
                customClass: {
                    popup: 'rounded-2xl shadow-lg',
                    title: 'text-xl font-semibold',
                    confirmButton: 'px-4 py-2 rounded-lg text-white font-medium',
                    cancelButton: 'px-4 py-2 rounded-lg font-medium',
                }
            }).then((result) => {
                if (result.isConfirmed) {
                     window.location.href = "{{ route('client.login') }}";
                }
            });
        }

    }
}
container.scrollTop = container.scrollHeight;