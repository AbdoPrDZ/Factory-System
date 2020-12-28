<html>
  <head>
    <script src="../../Data/include/font-awesome/js/b99e675b6e.js"></script>
    <?php
      $title = "Invoice #:invoice_id:";
    ?>
    <title>:SITE_TITLE: -<?php echo $title;?>-</title>
    <link rel="shortcut icon" href="../../Data/images/icon.png"/>
    <link rel="stylesheet" type="text/Data" href="../../Data/include/bootstrap/css/bootstrap.min.css?v=<?php echo time();?>"/>
    <style>
      .invoice {
        position: relative;
        background-color: #FFF;
        min-height: 680px;
        padding: 15px
      }

      .invoice header {
        padding: 10px 0;
        margin-bottom: 20px;
        border-bottom: 1px solid #3989c6
      }

      .invoice .company-details {
        text-align: right
      }

      .invoice .company-details .name {
        margin-top: 0;
        margin-bottom: 0
      }

      .invoice .contacts {
        margin-bottom: 20px
      }

      .invoice .invoice-to {
        text-align: left
      }

      .invoice .invoice-to .to {
        margin-top: 0;
        margin-bottom: 0
      }

      .invoice .invoice-details {
        text-align: right
      }

      .invoice .invoice-details .invoice-id {
        margin-top: 0;
        color: #3989c6
      }

      .invoice main {
        padding-bottom: 50px
      }

      .invoice main .thanks {
        margin-top: -100px;
        font-size: 2em;
        margin-bottom: 50px
      }

      .invoice main .notices {
        padding-left: 6px;
        border-left: 6px solid #3989c6
      }

      .invoice main .notices .notice {
        font-size: 1.2em
      }

      .invoice table {
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
        margin-bottom: 20px
      }

      .invoice table td,.invoice table th {
        padding: 15px;
        background: #eee;
        border-bottom: 1px solid #fff
      }

      .invoice table th {
        white-space: nowrap;
        font-weight: 400;
        font-size: 16px
      }

      .invoice table td h3 {
        margin: 0;
        font-weight: 400;
        color: #3989c6;
        font-size: 1.2em
      }

      .invoice table .qty,.invoice table .total,.invoice table .unit {
        text-align: right;
        font-size: 1.2em
      }

      .invoice table .no {
        color: #fff;
        font-size: 1.6em;
        background: #3989c6
      }

      .invoice table .unit {
        background: #ddd
      }

      .invoice table .total {
        background: #3989c6;
        color: #fff
      }

      .invoice table tbody tr:last-child td {
        border: none
      }

      .invoice table tfoot td {
        background: 0 0;
        border-bottom: none;
        white-space: nowrap;
        text-align: right;
        padding: 10px 20px;
        font-size: 1.2em;
        border-top: 1px solid #aaa
      }

      .invoice table tfoot tr:first-child td {
        border-top: none
      }

      .invoice table tfoot tr:last-child td {
        color: #3989c6;
        font-size: 1.4em;
        border-top: 1px solid #3989c6
      }

      .invoice table tfoot tr td:first-child {
        border: none
      }

      .invoice footer {
        width: 100%;
        text-align: center;
        color: #777;
        border-top: 1px solid #aaa;
        padding: 8px 0
      }

      @media print {
        .invoice {
          font-size: 11px!important;
          overflow: hidden!important
        }

        .invoice footer {
          position: absolute;
          bottom: 10px;
          page-break-after: always
        }

        .invoice>div:last-child {
          page-break-before: always
        }
      }
    </style>
  </head>
  <body>
    <div class="invoice overflow-auto">
      <div style="min-width: 600px">
        <header>
          <div class="row">
            <div class="col">
              <a target="_blank" href=":site_link:">
                <img src="../../Data/images/logo.png" data-holder-rendered="true" width="100px" />
                </a>
            </div>
            <div class="col company-details">
              <h2 class="name">
                <a target="_blank" href=":site_link:">
                :SITE_TITLE:
                </a>
              </h2>
              <div class="address">:admin_address:</div>
              <div class="email"><a href="mailto::admin_email:">:admin_email:</a></div>
              <div class="phone"><a href="tel::phone:">:admin_phone:</a></div>
            </div>
          </div>
        </header>
        <main>
          <div class="row contacts">
            <div class="col invoice-to">
              <div class="text-gray-light">INVOICE TO:</div>
              <h2 class="to">:firstname: :lastname:</h2>
              <div class="address">:address:</div>
              <div class="phone"><a href="tel::phone:">:phone:</a></div>
              <div class="email"><a href="mailto::email:">:email:</a></div>
            </div>
            <div class="col invoice-details">
              <h1 class="invoice-id">INVOICE #:invoice_id:</h1>
              <div class="date">Requesting Date: :request_date:</div>
              <div class="date">Invoice Date: :invoice_date:</div>
            </div>
          </div>
          <table border="0" cellspacing="0" cellpadding="0">
            <thead>
              <tr>
                <th>Date</th>
                <th>Units Number</th>
                <th>Weight</th>
                <th class="text-right">Amount</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td></td>
                <td>:units_number:</td>
                <td>:weight: Kg</td>
                <td class="total">:amount:</td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>Total Amount</td>
                <td>:amount:</td>
              </tr>
            </tfoot>
          </table>
          <br>
          <h2 class="text-center">Thank you!</h2>
        </main>
        <footer>
          <?php include "../../templates/inc/footer.php"?>
        </footer>
      </div>
    </div>
  </body>
</html>