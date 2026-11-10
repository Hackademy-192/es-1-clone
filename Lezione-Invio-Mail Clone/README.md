RACCOLTA DATI:

1. setup del FORM -> attributi necessari per la raccolta dati:
    - method: tipo di richiesta (CREARE UNA RISORSA) -> POST
    - action: funzione per la raccolta ed utilizzo dei dati -> REQUEST -> Rotta
    - ad ogni input/textarea del form dovremo aggiungere l'attributo name e valorizzarlo con il nome che vogliamo dare alla chiave del dato specifico

2. Aggiunta del token di sicurezza:
    - CSRF: Cross-Site Request Forgery

3. Gestire la Rotta:
    - web.php inserire la rotta e richiamare la funzione
    - Nel Controller inserire la funzione e assegnare ad essa (tramite Dependency Injection) un parametro formale chiamato Request. (Request $request)

UTILIZZO DEI DATI: