# Política de Seguridad

## Versiones con soporte

Este es un proyecto **académico** distribuido con fines educativos. Se encuentra
en la versión `1.0.0` y no recibe parches de seguridad activos. Aun así,
agradecemos la comunicación responsable de cualquier vulnerabilidad detectada.

## Reportar una vulnerabilidad

Si descubres una vulnerabilidad de seguridad en el proyecto:

1. **No** abras un *issue* público para divulgarla.
2. Envía un correo al equipo de autores del proyecto o utiliza la sección
   *Security* del repositorio (si está habilitada).
3. Incluye la mayor cantidad de detalles posible:
   - Descripción de la vulnerabilidad y su impacto potencial.
   - Pasos para reproducirla.
   - Versión o *commit* afectado.
   - Sugerencia de mitigación (si la hay).

### Qué esperar

- Acusamos recibo de tu informe en un plazo razonable (5-7 días laborables).
- Evaluamos el impacto. **Importante:** este es un proyecto educativo de
  referencia, por lo que algunas credenciales pueden existir en el repositorio
  con fines de demostración y ya fueron revocadas.
- Una vez evaluado, actualizaremos la documentación del repositorio o el
  `CHANGELOG.md` según corresponda.

## Buenas prácticas recomendadas

Dado el carácter académico del proyecto, al desplegarlo en otros entornos:

- Sustituye las credenciales de `model/connectDB.php` por las de tu propia base
  de datos.
- Usa contraseñas con *hash* (`password_hash` / `password_verify`) si reutilizas
  el flujo de autenticación en producción.
- Mantén PHP y el servidor web actualizados.
