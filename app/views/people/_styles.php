<style>
:root {
  --bg: #ffffff;
  --caramel: #d2a679;
  --caramel-600: #bf8b5a;
  --text: #1f1f1f;
  --muted: #6b7280;
  --border: #ececec;
  --card: #ffffff;
}
* { box-sizing: border-box; }
body {
  margin: 0; font-family: ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
  background: var(--bg); color: var(--text);
}
.container {
  max-width: 960px; margin: 40px auto; padding: 0 16px;
}
.header {
  display: flex; align-items: center; justify-content: space-between; margin-bottom: 16px;
}
.title {
  font-size: 28px; font-weight: 700; letter-spacing: .2px;
}
.btn {
  display: inline-block; padding: 10px 14px; border-radius: 10px; text-decoration: none; font-weight: 600;
  transition: transform .05s ease, box-shadow .2s ease;
}
.btn:active { transform: translateY(1px); }
.btn-primary { background: var(--caramel); color: #fff; box-shadow: 0 6px 16px rgba(210,166,121,.35); }
.btn-primary:hover { background: var(--caramel-600); }
.btn-ghost { background: transparent; color: var(--caramel); border: 1px solid var(--caramel); }
.card {
  background: var(--card); border: 1px solid var(--border); border-radius: 16px; padding: 16px;
  box-shadow: 0 10px 30px rgba(0,0,0,.04);
}
.table {
  width: 100%; border-collapse: collapse; margin-top: 8px; overflow: hidden; border-radius: 12px;
}
.table thead th {
  text-align: left; font-size: 13px; letter-spacing: .4px; text-transform: uppercase; color: var(--muted);
  padding: 12px; background: #f8f6f4;
}
.table tbody td {
  padding: 14px 12px; border-top: 1px solid var(--border);
}
.row-actions a {
  margin-right: 10px; text-decoration: none; font-weight: 600;
}
.link { color: var(--caramel); }
.link:hover { color: var(--caramel-600); }
.form {
  display: grid; gap: 14px; margin-top: 8px;
}
.input {
  width: 100%; padding: 12px 14px; border: 1px solid var(--border); border-radius: 12px; outline: none;
}
.input:focus { border-color: var(--caramel); box-shadow: 0 0 0 3px rgba(210,166,121,.15); }
.label { font-size: 13px; color: var(--muted); margin-bottom: 6px; display: block; }
.actions { display: flex; gap: 10px; margin-top: 8px; }
.badge {
  display: inline-block; padding: 4px 10px; background: #f8f6f4; color: var(--caramel-600); border-radius: 999px; font-size: 12px;
}
.empty {
  text-align: center; color: var(--muted); padding: 28px 0;
}
</style>
