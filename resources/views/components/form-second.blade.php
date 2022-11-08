<form method="post" action="{{ route('companyinfo.store') }}">
  @csrf
  <div>
    <input type="text" name="memo">メモ
  </div>
  <div>
    <button type="button" onClick="history.back();" >戻る</button>
  </div>
  <div>
    <button>保存</button>
  </div>
  <input type="hidden" name="companyName" value="{{ $request->companyName}}">
</form>