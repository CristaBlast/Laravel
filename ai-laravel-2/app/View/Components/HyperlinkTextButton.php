<?php
namespace App\View\Components;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
class HyperlinkTextButton extends Component
{
 public function __construct(
 public string $text = '',
 public string $href = '#',
 public string $type = 'dark',
 ) {
 $this->type = strtolower($type);
 if (!in_array($this->type, ['primary', 'secondary', 'success', 'danger',
 'warning', 'info', 'light', 'dark', 'link'], true)) {
 $this->type = 'dark';
 }
 $this->text = trim($text) ?: ucfirst($this->type);
 }
 public function render(): View|Closure|string
 {
 return view('components.hyperlink-text-button');
 }
}
