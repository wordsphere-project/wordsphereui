<?php
declare(strict_types=1);

namespace Wordsphere\Ui\View;

use AllowDynamicProperties;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use function dd;

#[AllowDynamicProperties]
abstract class WordsphereUiComponent extends Component
{

    public mixed $size = '';

    abstract public function blade(): View;

    public function render(): Closure
    {
        return function (array $data) {
            return $this->blade()->with($data);
        };
    }

    protected function setupSize(array $data): array
    {

        $sizes = [
            'xs' => '',
            'sm' => 'py-1.5 px-1.5 text-sm rounded-sm bg-pink-500',
            'md' => 'py-2 px-3 text-sm rounded-md bg-blue-600 hover:bg-blue-500 transition duration-300 text-white font-semibold',
            'lg' => '',
            'xl' => '',
            'xl2' => ''
        ];


        $this->size = $this->attributes->get('size');

        $data['sizeClasses'] = $sizes[$this->size];
        return $data;

    }


}
