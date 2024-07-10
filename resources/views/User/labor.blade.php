@include('Components.header')

<style>
    .about_section {
        padding: 10px 0;
    }

    .about_section .container {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        /* Align items to the left */
    }

    .about_section .card {
        display: flex;
        justify-content: space-between;
        align-items: left;
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 5px;
        margin: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: 100%;
        /* Full width */
        max-width: 600px;
        /* Max width for the card */
        background: #f9f9f9;
        height: 40px;
        /* Same height as the button */
    }

    .about_section .card-content {
        display: flex;
        align-items: left;
    }

    .about_section .card-title-wrapper {
        margin-right: 20px;
    }

    .about_section .card-title {
        font-size: 1em;
        font-weight: bold;
        margin: 0;
    }

    .about_section .card-text {
        font-size: 0.8em;
        margin: 0;
    }

    .about_section .btn-accept {
        background-color: #4CAF50;
        color: white;
        border: none;
        padding: 5px 10px;
        text-align: center;
        text-decoration: none;
        font-size: 0.8em;
        cursor: pointer;
        border-radius: 5px;
        transition: 0.4s ease-in-out;
        height: 30px;
        line-height: 20px;
    }

    .about_section .btn-accept:hover,
    .about_section .btn-accept:active,
    .about_section .btn-accept:focus {
        background-color: #45a049;
    }

    .about_section .card-content,
    .about_section .btn-accept {
        flex: none;
    }

    .about_section .card-title-wrapper {
        flex: 1;
        display: flex;
        justify-content: flex-start;
    }

    @media (max-width: 768px) {
        .about_section .card {
            flex-direction: column;
            align-items: flex-start;
            width: 100%;
            /* Full width in mobile view */
            max-width: none;
            /* No max width in mobile view */
        }

        .about_section .btn-accept {
            align-self: flex-end;
            margin-top: 10px;
        }
    }
</style>

<!-- end header section -->
</div>

<!-- about section -->
<br>
<br>
<br>
<section class="about_section layout_padding">

        <h1 style="text-align: center;"><center>LABOR STANDARD CHECKLIST</h1>

        <style type="text/css">
          .tg {
    border-collapse: collapse;
    border-color: #aabcfe;
    border-spacing: 0;
    width: 70%;
    margin: 0 auto; /* This centers the table */
}


            .tg td {
                background-color: #e8edff;
                border-color: #aabcfe;
                border-style: solid;
                border-width: 1px;
                color: #669;
                font-family: Arial, sans-serif;
                font-size: 14px;
                overflow: hidden;
                padding: 10px 5px;
                word-break: normal;
            }

            .tg th {
                background-color: #b9c9fe;
                border-color: #aabcfe;
                border-style: solid;
                border-width: 1px;
                color: #039;
                font-family: Arial, sans-serif;
                font-size: 14px;
                font-weight: normal;
                overflow: hidden;
                padding: 10px 5px;
                word-break: normal;
            }

            .tg .tg-phtq {
                background-color: #D2E4FC;
                border-color: inherit;
                text-align: left;
                vertical-align: top
            }

            .tg .tg-hmp3 {
                background-color: #D2E4FC;
                text-align: left;
                vertical-align: top
            }

            .tg .tg-c3ow {
                border-color: inherit;
                text-align: center;
                vertical-align: top
            }

            .tg .tg-ydyv {
                background-color: #D2E4FC;
                border-color: inherit;
                text-align: right;
                vertical-align: top
            }

            .tg .tg-svo0 {
                background-color: #D2E4FC;
                border-color: inherit;
                text-align: center;
                vertical-align: top
            }

            .tg .tg-0pky {
                border-color: inherit;
                text-align: left;
                vertical-align: top
            }

            .tg .tg-dvpl {
                border-color: inherit;
                text-align: right;
                vertical-align: top
            }

            .tg .tg-0lax {
                text-align: left;
                vertical-align: top
            }
        </style>
       <style type="text/css">
        .tg  {border-collapse:collapse;border-color:#aabcfe;border-spacing:0;}
        .tg td{background-color:#e8edff;border-color:#aabcfe;border-style:solid;border-width:1px;color:#669;
          font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;word-break:normal;}
        .tg th{background-color:#b9c9fe;border-color:#aabcfe;border-style:solid;border-width:1px;color:#039;
          font-family:Arial, sans-serif;font-size:14px;font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
        .tg .tg-phtq{background-color:#D2E4FC;border-color:inherit;text-align:left;vertical-align:top}
        .tg .tg-c3ow{border-color:inherit;text-align:center;vertical-align:top}
        .tg .tg-ydyv{background-color:#D2E4FC;border-color:inherit;text-align:right;vertical-align:top}
        .tg .tg-dvpl{border-color:inherit;text-align:right;vertical-align:top}
        .tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top}
        </style>
        <table class="tg"><thead>
          <tr>
            <th class="tg-c3ow" colspan="4">Results</th>
          </tr></thead>
        <tbody>
          <tr>
            <td class="tg-phtq" rowspan="2">Application Labor Standards</td>
            <td class="tg-phtq" colspan="2">Retail &amp; Services</td>
            <td class="tg-phtq" rowspan="2">Non Agricultural/Agricultural</td>
          </tr>
          <tr>
            <td class="tg-dvpl">Employing 1 to 5 Workers</td>
            <td class="tg-dvpl">Employing 1 to 9 Workers</td>
          </tr>
          <tr>
            <td class="tg-phtq">1. Minimum Wage</td>
            <td class="tg-ydyv"><center>✔</center></td>
            <td class="tg-ydyv"><center>✔</center></td>
            <td class="tg-ydyv"><center>✔</center></td>
        </tr>
        <tr>
            <td class="tg-phtq">2. Holiday Pay</td>
            <td class="tg-ydyv"><center>N/A</center></td>
            <td class="tg-ydyv"><center>N/A</center></td>
            <td class="tg-ydyv"><center>✔</center></td>
        </tr>
        <tr>
            <td class="tg-phtq">3. Premium Pay</td>
            <td class="tg-ydyv"><center>✔</center></td>
            <td class="tg-ydyv"><center>✔</center></td>
            <td class="tg-ydyv"><center>✔</center></td>
        </tr>
        <tr>
            <td class="tg-phtq">4. Overtime Pay</td>
            <td class="tg-ydyv"><center>✔</center></td>
            <td class="tg-ydyv"><center>✔</center></td>
            <td class="tg-ydyv"><center>✔</center></td>
        </tr>
        <tr>
            <td class="tg-phtq">5. Night Shift Differential</td>
            <td class="tg-ydyv"><center>N/A</center></td>
            <td class="tg-ydyv"><center>✔</center></td>
            <td class="tg-ydyv"><center>✔</center></td>
        </tr>
        <tr>
            <td class="tg-phtq">6. Service Charges</td>
            <td class="tg-ydyv"><center>✔</center></td>
            <td class="tg-ydyv"><center>✔</center></td>
            <td class="tg-ydyv"><center>✔</center></td>
        </tr>
        <tr>
            <td class="tg-phtq">7. Service Incentive Leave</td>
            <td class="tg-ydyv"><center>N/A</center></td>
            <td class="tg-ydyv"><center>N/A</center></td>
            <td class="tg-ydyv"><center>✔</center></td>
        </tr>
        <tr>
            <td class="tg-phtq">8. Maternity Leave</td>
            <td class="tg-ydyv"><center>✔</center></td>
            <td class="tg-ydyv"><center>✔</center></td>
            <td class="tg-ydyv"><center>✔</center></td>
        </tr>
        <tr>
            <td class="tg-phtq">9. Paternity Leave</td>
            <td class="tg-ydyv"><center>✔</center></td>
            <td class="tg-ydyv"><center>✔</center></td>
            <td class="tg-ydyv"><center>✔</center></td>
        </tr>
        <tr>
            <td class="tg-phtq">10. Parental Leave</td>
            <td class="tg-ydyv"><center>✔</center></td>
            <td class="tg-ydyv"><center>✔</center></td>
            <td class="tg-ydyv"><center>✔</center></td>
        </tr>
        <tr>
            <td class="tg-phtq">11. Leave for VAWC</td>
            <td class="tg-ydyv"><center>✔</center></td>
            <td class="tg-ydyv"><center>✔</center></td>
            <td class="tg-ydyv"><center>✔</center></td>
        </tr>
        <tr>
            <td class="tg-phtq">12. Special Leave for Women</td>
            <td class="tg-ydyv"><center>✔</center></td>
            <td class="tg-ydyv"><center>✔</center></td>
            <td class="tg-ydyv"><center>✔</center></td>
        </tr>
        <tr>
            <td class="tg-phtq">13. 13th Month Pay</td>
            <td class="tg-ydyv"><center>✔</center></td>
            <td class="tg-ydyv"><center>✔</center></td>
            <td class="tg-ydyv"><center>✔</center></td>
        </tr>
        <tr>
            <td class="tg-phtq">14. Separation Pay</td>
            <td class="tg-ydyv"><center>✔</center></td>
            <td class="tg-ydyv"><center>✔</center></td>
            <td class="tg-ydyv"><center>✔</center></td>
        </tr>
        <tr>
            <td class="tg-phtq">15. Retirement Pay</td>
            <td class="tg-ydyv"><center>N/A</center></td>
            <td class="tg-ydyv"><center>N/A</center></td>
            <td class="tg-ydyv"><center>✔</center></td>
        </tr>
        <tr>
            <td class="tg-phtq">16. ECC Benefits</td>
            <td class="tg-ydyv"><center>✔</center></td>
            <td class="tg-ydyv"><center>✔</center></td>
            <td class="tg-ydyv"><center>✔</center></td>
        </tr>
        <tr>
            <td class="tg-phtq">17. PhilHealth Benefits</td>
            <td class="tg-ydyv"><center>✔</center></td>
            <td class="tg-ydyv"><center>✔</center></td>
            <td class="tg-ydyv"><center>✔</center></td>
        </tr>
        <tr>
            <td class="tg-phtq">18. SSS Benefits</td>
            <td class="tg-ydyv"><center>✔</center></td>
            <td class="tg-ydyv"><center>✔</center></td>
            <td class="tg-ydyv"><center>✔</center></td>
        </tr>
        <tr>
            <td class="tg-phtq">19. Pag-IBIG Benefits</td>
            <td class="tg-ydyv"><center>✔</center></td>
            <td class="tg-ydyv"><center>✔</center></td>
            <td class="tg-ydyv"><center>✔</center></td>
        </tr>
        </tbody>
        </table>
            </tbody>
        </table>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', (event) => {
                document.querySelectorAll('.apply-btn').forEach(button => {
                    button.addEventListener('click', function() {
                        const row = this.closest('tr');
                        const category = row.getAttribute('data-category');
                        const job = row.getAttribute('data-job');

                        document.getElementById('job-category').value = category;
                        document.getElementById('job-name').value = job;
                    });
                });
            });
        </script>

        <style>
            .job-table {
                width: 100%;
                border-collapse: collapse;
            }

            .job-table th,
            .job-table td {
                border: 1px solid #ddd;
                padding: 8px;
                text-align: left;
            }

            .job-table th {
                background-color: #f2f2f2;
            }

            .btn-accept {
                background-color: #4CAF50;
                /* Green */
                color: white;
                border: none;
                padding: 10px 20px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                cursor: pointer;
            }

            .modal-dialog-centered {
                display: flex;
                align-items: center;
                min-height: calc(100% - 1rem);
            }

            .modal-dialog-centered .modal-content {
                margin: auto;
            }
        </style>





<section class="info_section ">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="info_logo">
            <a class="navbar-brand" href="/">
              <span>
                Abic Manpower
              </span>
            </a>
            <p>
              dolor sit amet, consectetur magna aliqua. Ut enim ad minim veniam, quisdotempor incididunt r
            </p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_links">
            <h5>
              Useful Link
            </h5>
            <ul>
              <li>
                <a href="">
                  dolor sit amet, consectetur
                </a>
              </li>
              <li>
                <a href="">
                  magna aliqua. Ut enim ad
                </a>
              </li>
              <li>
                <a href="">
                  minim veniam,
                </a>
              </li>
              <li>
                <a href="">
                  quisdotempor incididunt r
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_info">
            <h5>
              Contact Us
            </h5>
          </div>
          <div class="info_contact">
            <a href="" class="">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>
                Lorem ipsum dolor sit amet,
              </span>
            </a>
            <a href="" class="">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                Call : +01 1234567890
              </span>
            </a>
            <a href="" class="">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>
                demo@gmail.com
              </span>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_form ">
            <h5>
              Newsletter
            </h5>
            <form action="#">
              <input type="email" placeholder="Enter your email">
              <button>
                Subscribe
              </button>
            </form>
            <div class="social_box">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-youtube" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

        <!-- end about section -->

        <!-- info section -->
        <footer class="container-fluid footer_section">
            <p>
              &copy; <span id="currentYear"></span> All Rights Reserved. Design by
              <a href="https://html.design/">Free Html Templates</a>
            </p>
          </footer>
          <!-- footer section -->

          <script src="js/jquery-3.4.1.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
          <script src="js/bootstrap.js"></script>
          <script src="js/custom.js"></script>
        </body>

        </html>
