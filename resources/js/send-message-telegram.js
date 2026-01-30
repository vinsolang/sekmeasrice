
        document.addEventListener("DOMContentLoaded", () => {

            document.querySelectorAll('.btn-buy-now').forEach(button => {
                button.addEventListener('click', function () {

                    // Scroll to form
                    const section = document.getElementById('section-products');
                    if (section) {
                        section.scrollIntoView({ behavior: 'smooth' });
                    }

                    // Get product data
                    const name = this.dataset.name;
                    const price = parseFloat(this.dataset.price);
                    const capacity = this.dataset.capacity;

                    // Format price with $ and comma
                    const formattedPrice = "$" + price.toLocaleString();

                    // Fill form
                    document.getElementById('input-name').value = name;
                    document.getElementById('input-capacity').value = capacity;
                    document.getElementById('input-price').value = formattedPrice;

                    // Auto calculate total when quantity changes
                    const qtyInput = document.getElementById('input-quantity');
                    const totalInput = document.getElementById('input-total');

                    qtyInput.addEventListener('input', () => {
                        const qty = parseFloat(qtyInput.value) || 0;
                        const total = qty * price;

                        // Format total with $ and comma
                        totalInput.value = "$" + total.toLocaleString(undefined, { minimumFractionDigits: 2 });
                    });
                });
            });

        });

   
   // {{-- Send Message tolegram --}}
  
        document.addEventListener("DOMContentLoaded", () => {
            const btnSend = document.getElementById("btn-send-telegram");

            btnSend.addEventListener("click", function () {

                // Collect form data
                const customerName = document.querySelector("input[placeholder='Customer Name']").value;
                const address = document.querySelector("input[placeholder='Address']").value;
                const contactPerson = document.querySelector("input[placeholder='Contact Person']").value;
                const contactInfo = document.querySelector("input[placeholder='Contact Information']").value;

                const productName = document.getElementById("input-name").value;
                const capacity = document.getElementById("input-capacity").value;
                const quantity = document.getElementById("input-quantity").value;
                const price = document.getElementById("input-price").value;
                const total = document.getElementById("input-total").value;

                const bagType = document.querySelector("select").value;

                // Format message
                const message =
                    `📦 *New Export Enquiry* \n\n` +
                    `👤 *Customer Information:*\n` +
                    `• Name: ${customerName}\n` +
                    `• Address: ${address}\n` +
                    `• Contact Person: ${contactPerson}\n` +
                    `• Contact Info: ${contactInfo}\n\n` +
                    `🛒 *Product Enquiry:*\n` +
                    `• Product: ${productName}\n` +
                    `• Packing Size: ${capacity}\n` +
                    `• Quantity: ${quantity}\n` +
                    `• Price: ${price}\n` +
                    `• Total: ${total}\n\n` +
                    `🛍 *Bag Type:* ${bagType}`;

                // Telegram Bot API
                const token = "7587916418:AAEzLlsLWCnIYlo0TPEPm0TRIRpcaP0VEyg";
                const chat_id = "-4819861863";
                const url = `https://api.telegram.org/bot${token}/sendMessage`;

                // AJAX request
                fetch(url, {
                    method: "POST",
                    headers: { "Content-Type": "application/json" },
                    body: JSON.stringify({
                        chat_id: chat_id,
                        text: message,
                        parse_mode: "Markdown"
                    })
                })
                    .then(response => response.json())
                    .then(data => {
                        alert("✔ Your enquiry has been sent successfully!");
                    })
                    .catch(error => {
                        alert("❌ Failed to send enquiry!");
                        console.error(error);
                    });
            });
        });


