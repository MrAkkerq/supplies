<form class="card card-body mb-4" method="POST" action="/supplies/{{ $supply->id }}/products/">
            @csrf
            <div class="form-group">
                <label class="form-label">Наименование товара</label>
                <select class="form-select" name="name">
                  <option value="Zozu кушон">Zozu кушон</option>
                  <option value="Zozu патчи">Zozu патчи</option>
                  <option value="Jomtam основа">Jomtam основа</option>
                  <option value="Jomtam патчи">Jomtam патчи</option>
                  <option value="O'CHEAL face">O'CHEAL face</option>
                  <option value="Yangmei консилер">Yangmei консилер</option>
                </select>
                <label class="form-label">Курс юаня</label>
                <input
                    type="number" class="form-control"
                    placeholder="Введите курс юаня в ₽"
                    step="0.001"
                    value="{{ old('yuan') }}"
                    name="yuan"
                >
                <label class="form-label">Цена</label>
                <input
                    type="number" class="form-control"
                    placeholder="Введите цену в ¥"
                    value="{{ old('price') }}"
                    name="price"
                >
                <label class="form-label">Количество</label>
                <input
                    type="number" class="form-control"
                    placeholder="Введите количество"
                    value="{{ old('quantity') }}"
                    name="quantity"
                >
            </div>
            <button type="submit" class="btn btn-primary">Добавить</button>
</form>