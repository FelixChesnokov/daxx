SELECT
    sales.customer AS customer,
    SUM(sales.revenue) AS revenue_sum,
    WEEK(invoices.invoice_date) AS invoice_week
FROM
    sales
LEFT JOIN
    invoices ON (sales.invoice_id = invoices.invoice_id)
GROUP BY customer, invoice_week
HAVING revenue_sum > 100000;



