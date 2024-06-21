<?php
namespace Arins\Helpers\Response;

interface ResponseInterface
{
    public function viewModel($parData = null, $parFormAction = null);
    public function validationFailed($parData = null, $parFormAction = null);

    public function toArray($parData);
    public function toJson($parData);
    public function toObject($parData);
}
