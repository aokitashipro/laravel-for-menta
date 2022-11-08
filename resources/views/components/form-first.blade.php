<form method="get" action="{{ route('companyinfo.create') }}">
  <div>
    <input type="text" name="companyName">企業名
  </div>
  <div>
    <button>次へ</button>
  </div>
  <input type="hidden" name="pageFlag" value="1">
</form>