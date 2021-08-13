<?php
/**
 * Translation file
 *
 * Note: don't change the return array to short notation because Transifex can't handle those during `tx push -s`
 */

return array(
	'APIException:ApiResultUnknown' => "Der Typ der API-Rückgabe ist unbekannt. Das sollte nicht passieren.",
	'APIException:MissingParameterInMethod' => "Fehlender Parameter %s in Methode %s.",
	'APIException:ParameterNotArray' => "%s scheint kein Feld zu sein.",
	'APIException:UnrecognisedTypeCast' => "Unbekannter Typ in Cast %s für Variable '%s' in Methode '%s'.",
	'APIException:InvalidParameter' => "Ungültiger Parameter für '%s' in Methode '%s' gefunden.",
	'APIException:FunctionParseError' => "%s(%s) ergab einen Parsing-Fehler.",
	'APIException:FunctionNoReturn' => "%s(%s) lieferte keinen Rückgabewert.",
	'APIException:APIAuthenticationFailed' => "Beim Aufruf der Methode schlug die API-Authentifizierung fehl.",
	'APIException:UserAuthenticationFailed' => "Beim Aufruf der Methode schlug die Benutzer-Authentifizierung fehl.",
	'APIException:MethodCallNotImplemented' => "Der Methoden-Aufruf '%s' ist nicht implementiert.",
	'APIException:FunctionDoesNotExist' => "Die Funktion für die Methode '%s' kann nicht aufgerufen werden.",
	'APIException:AlgorithmNotSupported' => "Algorithmus '%s' wird nicht unterstützt oder wurde deaktiviert.",
	'APIException:NotGetOrPost' => "Die Anfrage-Methode muß GET oder POST sein.",
	'APIException:MissingAPIKey' => "Fehlender API-Schlüssel.",
	'APIException:BadAPIKey' => "Ungültiger API-Schlüssel.",
	'APIException:MissingHmac' => "Fehlender X-Elgg-hmac Header.",
	'APIException:MissingHmacAlgo' => "Fehlender X-Elgg-hmac-algo Header.",
	'APIException:MissingTime' => "Fehlender X-Elgg-time Header.",
	'APIException:MissingNonce' => "Fehlender X-Elgg-nonce Header.",
	'APIException:TemporalDrift' => "Epoch-Fehler: X-Elgg-time liegt zu weit in der Vergangenheit oder Zukunft.",
	'APIException:NoQueryString' => "Keine Daten im Query-String.",
	'APIException:MissingPOSTHash' => "Fehlender X-Elgg-posthash Header.",
	'APIException:MissingPOSTAlgo' => "Fehlender X-Elgg-posthash_algo Header.",
	'APIException:MissingContentType' => "Content-Typ für POST-Daten fehlt.",
	'SecurityException:APIAccessDenied' => "Entschuldigung, der API-Zugriff wurde durch den Administrator deaktiviert.",
	'SecurityException:NoAuthMethods' => "Es konnte keine Authentifizierungs-Methode gefunden werden, um diesen API-Zugriff zu authentifizieren.",
	'SecurityException:authenticationfailed' => "Der Benutzer konnte nicht authentifiziert werden.",
	'InvalidParameterException:APIMethodOrFunctionNotSet' => "Die Methode oder Funktion wurde im Aufruf in expose_method() nicht gesetzt.",
	'InvalidParameterException:APIParametersArrayStructure' => "Die Parameter-Feldstruktur im Aufruf von Expose-Methode '%s' ist falsch.",
	'InvalidParameterException:UnrecognisedHttpMethod' => "Unbekannte Http-Methode %s für API-Methode '%s'.",
	'SecurityException:AuthTokenExpired' => "Entweder fehlt das Authentifizierungs-Token oder es ist ungültig oder abgelaufen.",
	'SecurityException:InvalidPostHash' => "POST-Daten-Hash ist ungültig - erwartet wurde %s aber %s erhalten.",
	'SecurityException:DupePacket' => "Packet-Signatur ist schon von früher bekannt.",
	'SecurityException:InvalidAPIKey' => "Ungültiger oder fehlender API-Schlüssel.",
	'NotImplementedException:CallMethodNotImplemented' => "Der Methoden-Aufruf '%s' wird derzeit nicht unterstützt.",
	'CallException:InvalidCallMethod' => "%s muß unter Verwendung von '%s' aufgerufen werden.",

	'system.api.list' => "Liste alle im System verfügbaren API-Aufrufe auf.",
	'auth.gettoken' => "Dieser API-Aufruf ermöglicht es einem Benutzer ein Authentifizierungs-Token zu beziehen, das für die Authentifizierung nachfolgender API-Aufrufe verwendet werden kann. Übergebe es als Parameter auth_token.",
	
	'admin:configure_utilities:webservices' => "Webservices",
	'admin:configure_utilities:ws_list' => "API-Methoden anzeigen",
	'admin:configure_utilities:ws_tokens' => "API-Tokens verwalten",
	'webservices:menu:entity:regenerate' => "API-Schlüssel neu erzeugen",
	
	'add:object:api_key' => "Neuen API-Token erzeugen",
	'edit:object:api_key' => "API-Token bearbeiten: %s",
	'entity:delete:object:api_key:success' => "Der API-Token %s wurde gelöscht.",
	
	'webservices:requires_api_authentication' => "API-Authentifizierung notwendig",
	'webservices:requires_user_authentication' => "Benutzer-Authentifizierung notwendig",
	'webservices:function' => "Interne Funktion:",
	'webservices:parameters' => "Webservice-Parameter:",
	'webservices:parameters:required' => "notwendig",
	'webservices:parameters:optional' => "optional",
	
	'webservices:api_key:public' => "Öffentlicher Schlüssel:",
	'webservices:api_key:secret' => "Geheimer Schlüssel:",
	'webservices:api_key:secret:show' => "Geheimen Schlüssel anzeigen",
	
	'webservices:action:api_key:edit:success' => "Der API-Token wurde gespeichert.",
	'webservices:action:api_key:regenerate:success' => "Die API-Schüssel wurden neu erzeugt.",

	// plugin settings
	'web_services:settings:authentication' => "Web API-Authentifizierungs-Einstellungen",
	'web_services:settings:authentication:description' => "Für einige API-Methoden ist es notwendig, dass sich die externen Quellen authentifizieren. Dafür ist für diese externen Quellen ein Schlüsselpaar notwendig (öffentlicher und geheimer Schlüssel).

Beachte bitte, dass mindestens eine API-Authentifizierungsmethode aktiviert sein muss, damit API-Anfragen authentifiziert werden können.",
	'web_services:settings:authentication:allow_key' => "Einfache Authentifizierung mit öffentlichem Schlüssel erlauben",
	'web_services:settings:authentication:allow_key:help' => "Der öffentliche Schlüssel kann als Parameter bei der Anfrage übergeben werden.",
	'web_services:settings:authentication:allow_hmac' => "HMAC-Header API-Authentifizierung erlauben",
	'web_services:settings:authentication:allow_hmac:help' => "Bei der HMAC-Authentifizierung ist es notwendig, dass ein spezieller Header mit der Anfrage übergeben wird, damit die Authenzität der Anfrage sichergestellt werden kann.",
);
