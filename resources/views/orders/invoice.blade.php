<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice #INV-{{ str_pad($order->id, 5, '0', STR_PAD_LEFT) }}</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: #1f2937;
            background-color: #f9fafb;
            margin: 0;
            padding: 40px;
            -webkit-print-color-adjust: exact;
            print-color-adjust: exact;
        }

        .invoice-card {
            max-width: 800px;
            margin: 0 auto;
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 16px;
            padding: 48px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03);
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: start;
            border-bottom: 2px solid #f3f4f6;
            padding-bottom: 24px;
            margin-bottom: 32px;
        }

        .company-logo {
            font-size: 24px;
            font-weight: 800;
            color: #4f46e5;
            letter-spacing: -0.05em;
        }

        .company-details {
            font-size: 12px;
            color: #6b7280;
            line-height: 1.5;
            margin-top: 8px;
        }

        .invoice-title {
            text-align: right;
        }

        .invoice-title h1 {
            font-size: 32px;
            font-weight: 800;
            margin: 0;
            color: #111827;
            letter-spacing: -0.025em;
        }

        .invoice-number {
            font-size: 14px;
            color: #4f46e5;
            font-weight: 600;
            margin-top: 4px;
        }

        .details-grid {
            display: grid;
            grid-template-cols: 1fr 1fr;
            gap: 24px;
            margin-bottom: 40px;
        }

        .details-section h3 {
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: #9ca3af;
            margin: 0 0 8px 0;
        }

        .details-section p {
            font-size: 14px;
            line-height: 1.5;
            margin: 0;
            color: #374151;
        }

        .details-section .name {
            font-weight: 700;
            color: #111827;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 32px;
        }

        th {
            background-color: #f9fafb;
            color: #4b5563;
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            text-align: left;
            padding: 12px 16px;
            border-bottom: 2px solid #e5e7eb;
        }

        td {
            padding: 16px;
            border-bottom: 1px solid #f3f4f6;
            font-size: 14px;
            color: #374151;
        }

        .table-total {
            background-color: #f9fafb;
            font-weight: 700;
        }

        .table-total td {
            border-bottom: none;
            color: #111827;
        }

        .total-amount {
            font-size: 18px;
            color: #4f46e5;
            font-weight: 800;
        }

        .badge {
            display: inline-flex;
            align-items: center;
            border-radius: 6px;
            padding: 4px 10px;
            font-size: 12px;
            font-weight: 600;
        }

        .badge-green {
            background-color: #d1fae5;
            color: #065f46;
        }

        .badge-amber {
            background-color: #fef3c7;
            color: #92400e;
        }

        .badge-red {
            background-color: #fee2e2;
            color: #991b1b;
        }

        .badge-zinc {
            background-color: #f3f4f6;
            color: #374151;
        }

        .footer {
            border-top: 1px dashed #e5e7eb;
            padding-top: 24px;
            text-align: center;
            font-size: 12px;
            color: #9ca3af;
        }

        .action-bar {
            max-width: 800px;
            margin: 0 auto 16px auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background-color: #ffffff;
            border: 1px solid #d1d5db;
            padding: 8px 16px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 600;
            color: #374151;
            cursor: pointer;
            text-decoration: none;
            transition: all 0.2s;
        }

        .btn:hover {
            background-color: #f9fafb;
            border-color: #c5c7d0;
        }

        .btn-indigo {
            background-color: #4f46e5;
            border-color: #4f46e5;
            color: #ffffff;
        }

        .btn-indigo:hover {
            background-color: #4338ca;
        }

        @media print {
            body {
                background-color: #ffffff;
                padding: 0;
            }
            .invoice-card {
                border: none;
                box-shadow: none;
                padding: 0;
            }
            .action-bar {
                display: none;
            }
        }
    </style>
</head>
<body>

    <div class="action-bar">
        <a href="{{ route('orders.show', $order->id) }}" class="btn">
            <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            Kembali ke Detail
        </a>
        <button onclick="window.print()" class="btn btn-indigo">
            <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path></svg>
            Cetak / Download PDF
        </button>
    </div>

    <div class="invoice-card">
        <div class="header">
            <div>
                <div class="company-logo">JOKIWEB.ID</div>
                <div class="company-details">
                    Gedung Teknologi Joki Lt. 3<br>
                    Jl. Informatika No. 101, Kota Tekno<br>
                    support@jokiweb.id &bull; +62 812-3456-7890
                </div>
            </div>
            <div class="invoice-title">
                <h1>INVOICE</h1>
                <div class="invoice-number">#INV-{{ str_pad($order->id, 5, '0', STR_PAD_LEFT) }}</div>
            </div>
        </div>

        <div class="details-grid">
            <div class="details-section">
                <h3>Ditagihkan Kepada:</h3>
                <p class="name">{{ $order->nama_klien }}</p>
                <p>Klien Joki Web</p>
                <p>Status Akun: Aktif</p>
            </div>
            <div class="details-section" style="text-align: right;">
                <h3>Detail Tagihan:</h3>
                <p><strong>Tanggal Invoice:</strong> {{ $order->created_at->format('d/m/Y') }}</p>
                <p><strong>Status Bayar:</strong> 
                    @if($order->status_pembayaran === 'lunas')
                        <span class="badge badge-green">LUNAS</span>
                    @elseif($order->status_pembayaran === 'menunggu_konfirmasi')
                        <span class="badge badge-amber">VERIFIKASI</span>
                    @elseif($order->status_pembayaran === 'ditolak')
                        <span class="badge badge-red">DITOLAK</span>
                    @else
                        <span class="badge badge-zinc">BELUM BAYAR</span>
                    @endif
                </p>
            </div>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Layanan Jasa Joki</th>
                    <th style="text-align: center;">Jumlah</th>
                    <th style="text-align: right;">Harga Satuan</th>
                    <th style="text-align: right;">Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="font-weight: 600; color: #111827;">{{ $order->layanan }}</td>
                    <td style="text-align: center;">{{ $order->jumlah }}</td>
                    <td style="text-align: right;">Rp {{ number_format($order->harga_awal / $order->jumlah, 0, ',', '.') }}</td>
                    <td style="text-align: right; font-weight: 600; color: #111827;">Rp {{ number_format($order->harga_awal, 0, ',', '.') }}</td>
                </tr>
                <tr class="table-total">
                    <td colspan="2"></td>
                    <td style="text-align: right; text-transform: uppercase; font-size: 12px; letter-spacing: 0.05em; color: #6b7280;">Grand Total</td>
                    <td style="text-align: right;" class="total-amount">Rp {{ number_format($order->harga_awal, 0, ',', '.') }}</td>
                </tr>
            </tbody>
        </table>

        <div class="footer">
            <p>Terima kasih telah mempercayakan pengerjaan website Anda kepada kami.</p>
            <p style="font-size: 10px; margin-top: 8px;">Ini adalah dokumen invoice sah yang diterbitkan oleh sistem JOKIWEB.ID</p>
        </div>
    </div>

</body>
</html>
