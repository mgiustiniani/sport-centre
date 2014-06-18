# language: it
Funzionalità: Sport Http Api
  In Order to Find all Sport Available

  Scenario: See available sport via http Api
    Dato un header "Accept" con "application/json"
    Quando lancio una richiesta GET con uri "/api/sports"
    Allora dovrei ottenre "200"
    E dovrei avere una risposta formato Json
    E nella risposta dovrei avere un campo "_links" -> "self" con l'url della richiesta