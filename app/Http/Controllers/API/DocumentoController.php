<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\CreateDocumentoRequest;
use App\Http\Requests\UpdateDocumentoRequest;
use App\Repositories\DocumentoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Response;

class DocumentoController extends AppBaseController
{
    /** @var  DocumentoRepository */
    private $documentoRepository;

    public function __construct(DocumentoRepository $documentoRepo)
    {
        $this->documentoRepository = $documentoRepo;
    }

    /**
     * Display a listing of the Documento.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $documentos = $this->documentoRepository->all();

        return response()->json($documentos);
    }

    /**
     * Store a newly created Documento in storage.
     *
     * @param CreateDocumentoRequest $request
     *
     * @return Response
     */
    public function store(CreateDocumentoRequest $request)
    {
        $input = $request->all();

        $documento = $this->documentoRepository->create($input);

        return response()->json($documento);
    }

    /**
     * Display the specified Documento.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $documento = $this->documentoRepository->find($id);

        if (empty($documento)) {
            return response()->json([
                'ERROR' => 'not found'
            ], 404);
        }

        return response()->json($documento);
    }

    /**
     * Update the specified Documento in storage.
     *
     * @param int $id
     * @param UpdateDocumentoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDocumentoRequest $request)
    {
        $documento = $this->documentoRepository->find($id);

        if (empty($documento)) {
            return response()->json([
                'ERROR' => 'not found'
            ], 404);
        }

        $documento = $this->documentoRepository->update($request->all(), $id);

        return response()->json($documento);
    }

    /**
     * Remove the specified Documento from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $documento = $this->documentoRepository->find($id);

        if (empty($documento)) {
            return response()->json([
                'ERROR' => 'not found'
            ], 404);
        }

        $this->documentoRepository->delete($id);

        return response()->json($documento);
    }
}
