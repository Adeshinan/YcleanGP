<div class="modal fade zoomIn" id="deleteRecordModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    id="btn-close"></button>
            </div>
            <div class="modal-body">
                <div class="mt-2 text-center">
                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop"
                        colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px">
                    </lord-icon>
                    <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                        <h4>Êtes vous sûre ?</h4>
                        <p class="text-muted mx-4 mb-0">Êtes-vous sûr de vouloir supprimer cet enregistrement ?</p>
                    </div>
                </div>
                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                    <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Fermer</button>
                    <a role="button" href="" class="btn w-sm btn-danger " id="deletelink">Oui, Supprimer le!</a>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    function showModal(route, id)
    {
        var routelink = route;
        routelink = routelink.replace(':id', id);
        $("#deleteModal").modal("show");
        $("#deletelink").attr("href", routelink);
    }
</script>
