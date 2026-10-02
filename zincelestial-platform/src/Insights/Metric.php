<?php
namespace ZinCelestial\Platform\Insights; defined('ABSPATH')||exit;
final class Metric{public function __construct(public readonly string $id,public readonly string $label,public readonly float|int $value,public readonly string $status='neutral',public readonly ?int $site_id=null){}public function to_array():array{return['id'=>sanitize_key($this->id),'label'=>sanitize_text_field($this->label),'value'=>$this->value,'status'=>sanitize_key($this->status),'site_id'=>$this->site_id];}}
